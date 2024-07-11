<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'login';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

require_once 'site/controllers/' . ucfirst($controller) . 'Controller.php';

$controllerClass = ucfirst($controller) . 'Controller';
$controllerObject = new $controllerClass();
$controllerObject->$action();
?>
