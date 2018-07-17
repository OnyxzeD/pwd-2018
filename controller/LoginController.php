<?php

require_once 'model/User.php';

class LoginController
{

    private $user = NULL;

    public function __construct()
    {
        $this->user = new User();
    }

    public function redirect($location)
    {
        header('Location: ' . $location);
    }

    public function handleRequest()
    {
        $op = isset($_GET['op']) ? $_GET['op'] : NULL;
        try {
            if (!$op || $op == 'login') {
                $this->login();
            } elseif ($op == 'auth') {
                $this->auth();
            } elseif ($op == 'logout') {
                $this->logout();
            } else {
                $this->showError("Page not found", "Page for operation " . $op . " was not found!");
            }
        } catch (Exception $e) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
    }

    public function login()
    {
        if (isset($_SESSION['account'])) {
            $this->redirect('index.php?r=admin');
        }
        $content = 'view/home/login.php';
        $header = 'Dasboard';
        include 'view/home/login.php';
    }

    public function auth()
    {
        if (($_POST['email'] != null) && ($_POST['password'] != null)) {
            try {
                $cek = $this->user->auth($_POST['email'], md5($_POST['password']));
                if (mysqli_num_rows($cek) > 0) {
                    $_SESSION['account'] = mysqli_fetch_assoc($cek);
                    $this->redirect('index.php');
                } else {
                    $errMsg = 'Email / Password Salah';
                    include 'view/home/login.php';
                }
            } catch (ValidationException $e) {
                $errors = $e->getErrors();
            }
        }
    }

    public function logout()
    {
        session_destroy();
        $this->redirect('index.php');
    }

}

?>
