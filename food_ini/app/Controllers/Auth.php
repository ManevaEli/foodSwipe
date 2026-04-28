<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function loginPost()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if ($user && $password === $user['mdp']) {
            session()->set([
                'user_id' => $user['id'],
                'email' => $user['email'],
                'logged_in' => true
            ]);
            return redirect()->to('/home');
        } else {
            return redirect()->back()->with('error', 'Email ou mot de passe incorrect');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}