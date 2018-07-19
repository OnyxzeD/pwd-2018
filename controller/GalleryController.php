<?php

require_once 'model/Gallery.php';

class GalleryController
{

    private $gallery = NULL;
    private $base_url = 'D:/xampp/htdocs/CRUD-NATIVE';

    public function __construct()
    {
        $this->gallery = new Gallery();
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
//                $this->showError("Page not found", "Page for operation " . $op . " was not found!");
                $this->redirect('index.php?&r=gallery');
            }
        } catch (Exception $e) {
            // some unknown Exception got through here, use application error page to display it
//            $this->showError("Application error", $e->getMessage());
            $this->redirect('index.php?&r=gallery');
        }
    }

    public function lists()
    {
        $data = $this->gallery->get();
        $content = 'view/gallery/index.php';
        $header = 'Galeri';
        include 'view/template/layout.php';
    }

    public function save()
    {
        if (isset($_POST['caption']) && isset($_FILES['path'])) {
            $data = $_POST;
            $value = [$_POST['caption']];
            $img = $_FILES['path'];
            if (isset($_FILES['path'])) {
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
                    $file_name = "G-" . rand(1, 10000) . $file_name;
                    array_push($value, $file_name);

                    $res = $this->gallery->create($value);
                    if ($res == 1) {
                        move_uploaded_file($file_tmp, "$this->base_url/assets/img/$file_name");
                        $this->redirect('index.php?&r=gallery');
                    } else {
                        $errMsg = $res;
                    }

                }
            }

        }

        $content = 'view/gallery/form.php';
        $header = 'Galeri';
        $ttl = 'Tambah Foto';
        $formAction = 'http://localhost/CRUD-NATIVE/index.php?&r=gallery&op=create';
        include 'view/template/layout.php';
    }

    public function update()
    {
        $id = (isset($_GET['id']) ? $_GET['id'] : $_POST['id']);
        $data = mysqli_fetch_assoc($this->gallery->find($id));
        $data['mode'] = "edit";
        if (isset($_POST['caption']) && isset($_FILES['path'])) {
            $column = ['caption', 'path'];
            $value = [$_POST['caption']];

            // image process
            $img = $_FILES['path'];
            if (isset($_FILES['path'])) {
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
                    $file_name = "G-" . rand(1, 10000) . $file_name;
                    array_push($value, $file_name);
                    $res = $this->gallery->update($id, $column, $value);
                    if ($res == 1) {
                        move_uploaded_file($file_tmp, "$this->base_url/assets/img/$file_name");
                        $this->redirect('index.php?&r=gallery');
                    } else {
                        $errMsg = $res;
                    }
                }
            }

        }


        $content = 'view/gallery/form.php';
        $header = 'Galeri';
        $ttl = 'Ubah Foto';
        $formAction = 'http://localhost/CRUD-NATIVE/index.php?&r=gallery&op=update';
        include 'view/template/layout.php';
    }

    public function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$id) {
            throw new Exception('Internal error.');
        }

        $this->gallery->delete($id);

        $this->redirect('index.php?&r=gallery');
    }

}

?>
