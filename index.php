<?php

require_once 'controller/CategoriesController.php';
require_once 'controller/ReporterController.php';
require_once 'controller/NewsController.php';
require_once 'controller/HomeController.php';
require_once 'controller/BannerController.php';
require_once 'controller/UserController.php';

$op = isset($_GET['r']) ? $_GET['r'] : NULL;
try {
    if (!$op) {
        $controller = new HomeController();
        $controller->handleRequest();
    } elseif ($op == 'categories') {
        $controller = new CategoriesController();
        $controller->handleRequest();
    } elseif ($op == 'reporter') {
        $controller = new ReporterController();
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
    } else {
        $this->showError("Page not found", "Page for operation " . $op . " was not found!");
    }
} catch (Exception $e) {
    // display apps error
    $this->showError("Application error", $e->getMessage());
}


?>
