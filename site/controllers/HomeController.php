<?php
class HomeController {
    public function index() {
        
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?controller=login&action=index');
            exit();
        }

        $user = $_SESSION['user'];

        require_once 'site/views/home.php';
    }
}
?>
