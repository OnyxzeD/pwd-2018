<?php

require_once 'model/Gallery.php';

class GalleryController
{

    private $gallery = NULL;
    private $base_url = NULL;
    private $services = NULL;
    private $conn = NULL;
    protected $image = [];

    public function __construct()
    {
        $this->services = new Services();
        $this->conn = $this->services->openDb();
        $this->gallery = new Gallery();
    }

    public function redirect($location)
    {
        header('Location: ' . $location);
    }

    public function handleRequest($folder)
    {
        $this->base_url = $folder;
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
            } elseif ($op == 'upload') {
                $this->upload();
            } else {
                $this->redirect('index.php?&r=gallery');
            }
        } catch (Exception $e) {
            // some unknown Exception got through here, use application error page to display it
            $this->redirect('index.php?&r=gallery');
        }
    }

    public function lists()
    {
        $sql = "SELECT a.nama_album, g.* FROM album a, gallery g WHERE a.id = g.album_id";
        $data = mysqli_query($this->conn, $sql);
//        $data = $this->gallery->get();
        $content = 'view/gallery/index.php';
        $header = 'Galeri';
        include 'view/template/layout.php';
    }

    public function save()
    {
        if (isset($_POST['caption'])) {
            $data = $_POST;
            $column = ['nama_album', 'created_at'];
            $value = [$_POST['caption'], date("Y-m-d H:i:s")];
            $res = $this->gallery->update($_POST['id'], $column, $value);
            if ($res == 1) {
                $this->redirect('index.php?&r=gallery');
            } else {
                $errMsg = $res;
            }
        } else {
            $data['id'] = $this->gallery->getId();
            $value = [$this->gallery->getId(), "", date("Y-m-d H:i:s"), $_SESSION['account']['id']];
            $this->gallery->create($value);
        }

        $content = 'view/gallery/form.php';
        $header = 'Galeri';
        $ttl = 'Tambah Album Foto';
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

    public function upload()
    {
        $id = $_GET['album'];
        $request = (isset($_POST['request']) ? $_POST['request'] : 1);
        if (!empty($_FILES)) {
            $tmpFile = $_FILES['file']['tmp_name'];
            $filename = $id . '-' . $_FILES['file']['name'];

            if ($request == 1) {
                $sql = "INSERT into gallery(path, album_id) VALUES ";
                $sql .= "('" . $filename . "','" . $id . "');";
                if (mysqli_query($this->conn, $sql)) {
                    move_uploaded_file($tmpFile, "$this->base_url/assets/img/$filename");
                }
                mysqli_close($this->conn);
                echo $sql . "<br>";
                echo "uploaded " . $filename;
            }
        }


        if ($request == 2) {
            $sql = "DELETE FROM gallery WHERE path = '" . $id . "-" . $_POST['name'] . "' AND album_id = '" . $id . "'";
            mysqli_query($this->conn, $sql);
            mysqli_close($this->conn);
            $filename = $id . "-" . $_POST['name'];
            echo "removed " . date("YmdHi") . '-' . $_POST['name'];
            unlink("$this->base_url/assets/img/$filename");
            exit;
        }
    }

}

?>
