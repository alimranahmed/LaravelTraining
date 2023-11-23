<?php

namespace App\Http\Controllers;

class AdminController
{
    public function dashboard()
    {
        $user = "Tom";
        $email = 'tom@gmail.com';
        return view('admin.dashboard', compact('user', 'email'));
    }
}
