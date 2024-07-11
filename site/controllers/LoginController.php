<?php
require_once 'site/models/User.php';

class LoginController
{
    public function index()
    {
        require_once 'site/views/login.php';
    }

    public function authenticate()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $user = new User();
            $result = $user->login($_POST['username'], $_POST['password']);
            if ($result) {
                session_start();
                $_SESSION['user'] = $result;
                header('Location: index.php?controller=home&action=index');
                exit();
            } else {
                $error = "Invalid credentials";
                require_once 'site/views/login.php';
            }
        }
    }
}
