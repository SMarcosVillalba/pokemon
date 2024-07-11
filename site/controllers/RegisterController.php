<?php
require_once 'site/models/User.php';

class RegisterController
{
    public function index()
    {
        require_once 'site/views/registro.php';
    }

    public function register()
    {
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
            $user = new User();
            $result = $user->register($_POST['username'], $_POST['password'], $_POST['email']);
            if ($result) {
                // Registro exitoso, redirige a la vista de registro
                header('Location: index.php');
                exit();
            } else {
                $error = "El usuario ya existe";
                require_once 'site/views/registro.php';
            }
        } else {
            // Manejo de caso cuando no se envían todos los datos necesarios
            $error = "Faltan datos para completar el registro";
            require_once 'site/views/registro.php';
        }
    }
}
