<?php
namespace app\controllers;

use app\core\Request;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {

        if ($request->isPost()) {
            $body = $request->getBody();
            echo '<pre>';
            print_r($body);
            exit();
        }

        if ($request->isGet()) {
            $this->setLayout('auth');
            return $this->render('register');
        }

    }

    // public function handleRegister()
    // {
    //     echo '<pre>';
    //     print_r($_POST);
    //     exit();
    // }
}
