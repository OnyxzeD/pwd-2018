<?php

require_once 'model/News.php';
require_once 'model/Services.php';

class NewsController
{

    private $news = NULL;
    private $base_url = 'D:/xampp/htdocs/CRUD-NATIVE';
    private $services = NULL;
    private $conn;

    public function __construct()
    {
        $this->services = new Services();
        $this->conn = $this->services->openDb();
        $this->news = new News();
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
            } elseif ($op == 'read') {
                $this->read();
            } else {
                $this->redirect('index.php?&r=news');
            }
        } catch (Exception $e) {
            // some unknown Exception got through here, use application error page to display it
            $this->redirect('index.php?&r=news');
        }
    }

    public function lists()
    {

        $sql = "SELECT b.*, u.username FROM berita b, user u WHERE b.penulis = u.id";
        $data = mysqli_query($this->conn, $sql);
        $content = 'view/news/index.php';
        $header = 'Berita';
        mysqli_close($this->conn);
        include 'view/template/layout.php';
    }

    public function save()
    {
        if (isset($_POST['judul'])) {
            $data = $_POST;
            $tags = "";
            for ($i = 0; $i < count($_POST['tags']); $i++) {
                if (($i + 1) == count($_POST['tags'])) {
                    $tags .= $_POST['tags'][$i];
                } else {
                    $tags .= $_POST['tags'][$i] . ",";
                }
            }
            $value = [$_POST['judul'], $_POST['isi'], $tags];
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
                    $name = explode(" ", $_POST['judul']);
                    $file_name = $name[0] . "-" . date('Y-m-d') . $file_name;
                    move_uploaded_file($file_tmp, "$this->base_url/assets/img/$file_name");
                    array_push($value, $file_name);
                    array_push($value, $_SESSION['account']['id']);
                    array_push($value, date('Y-m-d H:i:s'));

//                    print_r($value);
                    $res = $this->news->create($value);
                    if ($res == 1) {
                        $this->redirect('index.php?&r=news');
                    } else {
                        $errMsg = $res;
                    }
                }
            }

        }

        $content = 'view/news/form.php';
        $header = 'Berita';
        $ttl = 'Berita Guru';
        $formAction = 'http://localhost/CRUD-NATIVE/index.php?r=news&op=create';
        include 'view/template/layout.php';
    }

    public function update()
    {
        $id = (isset($_GET['id']) ? $_GET['id'] : $_POST['id']);
        $data = mysqli_fetch_assoc($this->news->findNews($id));
        $data['mode'] = "edit";
        if (isset($_POST['id'])) {
            $data = $_POST;
            $data['mode'] = "edit";
            $tags = "";
            for ($i = 0; $i < count($_POST['tags']); $i++) {
                if (($i + 1) == count($_POST['tags'])) {
                    $tags .= $_POST['tags'][$i];
                } else {
                    $tags .= $_POST['tags'][$i] . ",";
                }
            }

            $column = ['judul', 'isi', 'tags', 'thumbnail', 'penulis'];
            $value = [$_POST['judul'], $_POST['isi'], $tags];
            // image process
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
                    $name = explode(" ", $_POST['judul']);
                    $file_name = $name[0] . "-" . date('Y-m-d') . $file_name;
                    move_uploaded_file($file_tmp, "$this->base_url/assets/img/$file_name");
                    array_push($value, $file_name);
                    array_push($value, $_SESSION['account']['id']);

                    $res = $this->news->update($id, $column, $value);
                    if ($res == 1) {
                        $this->redirect('index.php?&r=news');
                    } else {
                        $errMsg = $res;
                    }
                }
            }

        }

        $content = 'view/news/form.php';
        $header = 'Guru';
        $ttl = 'Ubah Guru';
        $formAction = 'http://localhost/CRUD-NATIVE/index.php?&r=news&op=update';
        include 'view/template/layout.php';
    }

    public function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$id) {
            throw new Exception('Internal error.');
        }

        $this->news->delete($id);

        $this->redirect('index.php?&r=news');
    }

    public function read()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;

        $this->news->addCounter($id);

        $this->redirect('index.php?&r=news');
    }
}

?>
