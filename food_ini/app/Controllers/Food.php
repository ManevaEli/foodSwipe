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
    public function home()
    {
        return view('home');
    }
        public function stats()
    {
        return view('stats');
    }
            public function add()
    {
        return view('add-food');
    }

}
