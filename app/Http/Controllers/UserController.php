<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->paginate(10);

        return view('user.index', compact('users'));
    }

    public function showRegistrationForm()
    {
        return view('user.register');
    }

    public function register(UserRequest $request)
    {
        $userData = $request->validated();
        $userData['password'] = Hash::make($userData['password']);
        /** @var Authenticatable|Model $user */
        $user = User::query()->create($request->validated());
        Auth::login($user);

        return redirect('/admin');
    }
}
