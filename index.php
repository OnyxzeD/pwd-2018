<?php
session_start();
require_once 'controller/LoginController.php';
require_once 'controller/NewsController.php';
require_once 'controller/HomeController.php';
require_once 'controller/BannerController.php';
require_once 'controller/UserController.php';

$op = isset($_GET['r']) ? $_GET['r'] : NULL;
try {
    if (!isset($_SESSION['account'])) {
        $controller = new LoginController();
        $controller->handleRequest();
    } else {
        if (!$op) {
            $controller = new HomeController();
            $controller->handleRequest();
        } elseif ($op == 'news') {
            $controller = new NewsController();
            $controller->handleRequest();
        } elseif ($op == 'banner') {
            $controller = new BannerController();
            $controller->handleRequest();
        } elseif ($op == 'user') {
            $controller = new UserController();
            $controller->handleRequest();
        } elseif ($op == 'login') {
            $controller = new LoginController();
            $controller->handleRequest();
        } else {
            $this->showError("Page not found", "Page for operation " . $op . " was not found!");
        }
    }
} catch (Exception $e) {
    // display apps error
    $this->showError("Application error", $e->getMessage());
}


?>
