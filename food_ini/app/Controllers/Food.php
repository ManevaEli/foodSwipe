<?php

namespace App\Controllers;

class Food extends BaseController
{
    public function index()
    {
        return view('login');
    }
     public function register()
    {
        return view('register');
    }
}
