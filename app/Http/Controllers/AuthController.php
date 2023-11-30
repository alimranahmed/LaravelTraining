<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $user = User::query()
            ->where('email', $request->get('email'))
            ->first();

        if (is_null($user)) {
            throw ValidationException::withMessages(['email' => 'This user is not registered']);
        }

        if (Hash::check($request->get('password'), $user->password)) {
            Auth::login($user);
            return redirect('/admin');
        }

        throw ValidationException::withMessages(['email' => 'Either email or the password is incorrect']);
    }
}
