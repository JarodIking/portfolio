<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request, User $user)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        dd($user->verify($request));
    }


}
