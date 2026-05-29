<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function process()
    {
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model
            ->where('username', $username)
            ->where('password', $password)
            ->first();

        if ($user) {

            session()->set([
                'id'       => $user['id'],
                'username' => $user['username'],
                'role'     => $user['role'],
                'logged_in'=> true
            ]);

            return redirect()->to('/dashboard');

        } else {

            return redirect()->to('/login');

        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}