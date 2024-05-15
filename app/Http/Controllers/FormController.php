<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Retrieve the username from the request
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        // Process the submitted data
        // You can save it to the database, perform additional actions, etc.

        // Return a response
        return "<h1>Register Successfully</h1><h3>Email => $email</h3><h3>Username => $username</h3><h3>Password => $password</h3>";
    }
    public function login(Request $request)
    {
        // $validatedData = $request->validate([
        //     'email' => 'required|email|max:255',
        //     'password' => 'required|string|min:8',
        // ]);
        // Retrieve the username from the request
        $email = $request->input('email');
        $password = $request->input('password');
        if (strlen($password) < 8) {
            return "your password incorrect";
        }

        // Process the submitted data
        // You can save it to the database, perform additional actions, etc.

        // Return a response
        return "<h1>Login Successfully</h1><h3>Email => $email</h3><h3>Password => $password</h3>";
    }
}
