<?php
session_start();
require_once 'controller/HomeController.php';
require_once 'controller/FrontController.php';
require_once 'controller/NewsController.php';
require_once 'controller/BannerController.php';
require_once 'controller/StudentController.php';
require_once 'controller/TeacherController.php';
require_once 'controller/UserController.php';
require_once 'controller/LoginController.php';

$op = isset($_GET['r']) ? $_GET['r'] : NULL;
try {
    if (!isset($_SESSION['account'])) {
        if (!$op || $op == 'front') {
            $controller = new FrontController();
            $controller->handleRequest();
        } elseif ($op == 'login') {
            $controller = new LoginController();
            $controller->handleRequest();
        } else {
            header('Location: ' . 'index.php');
//            $this->showError("Page not found", "Page for operation " . $op . " was not found!");
        }
    } else {
        if (!$op || $op == 'admin') {
            $controller = new HomeController();
            $controller->handleRequest();
        } elseif ($op == 'front') {
            $controller = new FrontController();
            $controller->handleRequest();
        } elseif ($op == 'news') {
            $controller = new NewsController();
            $controller->handleRequest();
        } elseif ($op == 'banner') {
            $controller = new BannerController();
            $controller->handleRequest();
        } elseif ($op == 'student') {
            $controller = new StudentController();
            $controller->handleRequest();
        } elseif ($op == 'teacher') {
            $controller = new TeacherController();
            $controller->handleRequest();
        } elseif ($op == 'user') {
            $controller = new UserController();
            $controller->handleRequest();
        } elseif ($op == 'login') {
            $controller = new LoginController();
            $controller->handleRequest();
        } else {
            header('Location: ' . 'index.php');
//            $this->showError("Page not found", "Page for operation " . $op . " was not found!");
        }
    }
} catch (Exception $e) {
    // display apps error
    $this->showError("Application error", $e->getMessage());
}

function convertDate($data, $format)
{
    if ($data == '-' || $data == null || $data == ' ') {
        return "-";
    }

    if ($format == 'indo') {
        if (strlen($data) > 10) {
            $dt = explode(" ", $data);
            $date = explode("-", $dt[0]);
        } else {
            $date = explode("-", $data);
        }

        $bulan = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        if (isset($date[2]) && isset($date[1]) && isset($date[0])) {
            $converted = $date[2] . " " . $bulan[(int)($date[1]) - 1] . " " . $date[0];
        } else {
            $converted = "-";
        }
    } else if ($format == 'db') {
        // convert input format to YYYY-mm-dd
        $date = explode(" ", $data);
        $bulan = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $bln = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'];
        if (strlen($date[1]) == 3) {
            $month = array_search($date[1], $bln) + 1;
        } else {
            $month = array_search($date[1], $bulan) + 1;
        }

        if ($month < 10) {
            $converted = $date[2] . '-0' . $month . '-' . $date[0];
        } else {
            $converted = $date[2] . '-' . $month . '-' . $date[0];
        }
    }

    return $converted;
}

?>
