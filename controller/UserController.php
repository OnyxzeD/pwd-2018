<?php

require_once 'model/User.php';

class UserController
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
            if (!$op || $op == 'list') {
                $this->lists();
            } elseif ($op == 'create') {
                $this->save();
            } elseif ($op == 'update') {
                $this->update();
            } elseif ($op == 'delete') {
                $this->delete();
            } else {
                $this->showError("Page not found", "Page for operation " . $op . " was not found!");
            }
        } catch (Exception $e) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
    }

    public function lists()
    {
        $data = $this->user->get();
        $content = 'view/user/index.php';
        $header = 'Pengguna';
        include 'view/template/layout.php';
    }

    public function save()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $value = [$_POST['username'], md5($_POST['password']), $_POST['email'], 2, $_POST['status']];
            $res = $this->user->create($value);
            if ($res == 1) {
                $this->redirect('index.php?&r=user');
            } else {
                $errMsg = $res;
            }

        }

        $content = 'view/user/form.php';
        $header = 'Pengguna';
        $ttl = 'Tambah Pengguna';
        $formAction = 'http://localhost/CRUD-NATIVE/index.php?&r=user&op=create';
        include 'view/template/layout.php';
//        include 'view/user/form.php';
    }

    public function update()
    {
        $id = (isset($_GET['id']) ? $_GET['id'] : $_POST['id']);
        $data = mysqli_fetch_assoc($this->user->findUser($id));
        if (isset($_POST['id'])) {
            if (($_POST['passwordLama'] != null) && ($_POST['passwordBaru'] != null)) {
                if (md5($_POST['passwordLama']) == $data['password']) {
                    $column = ['username', 'password', 'email', 'status'];
                    $value = [$_POST['username'], md5($_POST['password']), $_POST['email'], $_POST['status']];
                } else {
                    $errMsg = "Password Lama Salah";
                    // 0f8b882765143b00b9c1ea0d3071a88c
                }
            }

            if (($_POST['email'] != null) && ($_POST['username']) != null) {
                $column = ['username', 'email', 'status'];
                $value = [$_POST['username'], $_POST['email'], $_POST['status']];
            }

            $res = $this->user->update($id, $column, $value);
            if ($res == 1) {
                $this->redirect('index.php?&r=user');
            } else {
                $errMsg = $res;
            }
        }


        $content = 'view/user/form.php';
        $header = 'Pengguna';
        $ttl = 'Ubah Pengguna';
        $formAction = 'http://localhost/CRUD-NATIVE/index.php?&r=user&op=update';
        include 'view/template/layout.php';
    }

    public function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$id) {
            throw new Exception('Internal error.');
        }

        $this->user->delete($id);

        $this->redirect('index.php?&r=user');
    }

    public function showError($title, $message)
    {
        include 'view/error.php';
    }

}

?>
