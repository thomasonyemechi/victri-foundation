<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    function adminLogin(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ])->validate();

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            return redirect('/blog_admin')->with('success', 'Welcome Back');
        }

        return back()->with('error', 'Invalid Credentials, Try again!');
    }
}
