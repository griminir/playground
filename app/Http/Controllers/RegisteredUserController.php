<?php

namespace App\Http\Controllers;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // validate the request
        dd(request()->all());
        // create the user
        // log the user in
        // redirect to the home page
    }
}
