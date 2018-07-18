<?php

require_once 'model/User.php';

class UserController
{

    private $user = NULL;
    private $base_url = 'D:/xampp/htdocs/CRUD-NATIVE';

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
            $data = $_POST;
            $value = [$_POST['username'], md5($_POST['password']), $_POST['email'], 2, $_POST['status']];
            $img = $_FILES['foto'];
            if (isset($_FILES['foto'])) {
                $errors = array();
                $file_name = $img['name'];
                $file_size = $img['size'];
                $file_tmp = $img['tmp_name'];
                $file_type = $img['type'];
                $file_ext = strtolower(end(explode('.', $img['name'])));

                $expensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $expensions) === false) {
                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                    $errMsg = "Silihkan Pilih JPEG atau PNG file";
                }

                if ($file_size > 2097152) {
                    $errors[] = 'File size must be excately 2 MB';
                    $errMsg = "Gambar tidak boleh lebih dari 2 MB";
                }

                if (empty($errors) == true) {
                    $name = explode("@", $_POST['email']);
                    $file_name = $name[0] . "-" . $file_name;
                    move_uploaded_file($file_tmp, "$this->base_url/assets/img/$file_name");
                    array_push($value, $file_name);

                    $cek = mysqli_num_rows($this->user->findBy("email = '" . $_POST['email'] . "'"));
                    if ($cek > 0) {
                        $errMsg = "Maaf, email sudah terdaftar";
                    } else {
                        $res = $this->user->create($value);
                        if ($res == 1) {
                            $this->redirect('index.php?&r=user');
                        } else {
                            $errMsg = $res;
                        }
                    }
                }
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
        $data['mode'] = "edit";
        if (isset($_POST['id'])) {
            if (($_POST['passwordLama'] != null) && ($_POST['passwordBaru'] != null)) {
                if (md5($_POST['passwordLama']) == $data['password']) {
                    $column = ['username', 'password', 'email', 'status', 'foto'];
                    $value = [$_POST['username'], md5($_POST['password']), $_POST['email'], $_POST['status']];
                } else {
                    $errMsg = "Password Lama Salah";
                }
            }

            if (($_POST['email'] != null) && ($_POST['username']) != null) {
                $column = ['username', 'email', 'status', 'foto'];
                $value = [$_POST['username'], $_POST['email'], $_POST['status']];
            }
            // img process
            $img = $_FILES['foto'];
            if (isset($_FILES['foto'])) {
                $errors = array();
                $file_name = $img['name'];
                $file_size = $img['size'];
                $file_tmp = $img['tmp_name'];
                $file_type = $img['type'];
                $file_ext = strtolower(end(explode('.', $img['name'])));

                $expensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $expensions) === false) {
                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                    $errMsg = "Silihkan Pilih JPEG atau PNG file";
                }

                if ($file_size > 2097152) {
                    $errors[] = 'File size must be excately 2 MB';
                    $errMsg = "Gambar tidak boleh lebih dari 2 MB";
                }

                if (empty($errors) == true) {
                    $name = explode("@", $_POST['email']);
                    $file_name = $name[0] . "-" . $file_name;
                    move_uploaded_file($file_tmp, "$this->base_url/assets/img/$file_name");
                    array_push($value, $file_name);

                    $res = $this->user->update($id, $column, $value);
                    if ($res == 1) {
                        $this->redirect('index.php?&r=user');
                    } else {
                        $errMsg = $res;
                    }
                }
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
