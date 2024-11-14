<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Login successful, redirecting...'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Incorrect password!'
            ]);
        }
    }
}
