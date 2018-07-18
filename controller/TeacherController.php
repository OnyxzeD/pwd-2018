<?php

require_once 'model/Teacher.php';

class TeacherController
{

    private $teacher = NULL;

    public function __construct()
    {
        $this->teacher = new Teacher();
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
        $data = $this->teacher->get();
        $content = 'view/teacher/index.php';
        $header = 'Guru';
        include 'view/template/layout.php';
    }

    public function save()
    {
        if (isset($_POST['nip']) && isset($_POST['nama'])) {
            $value = [$_POST['nip'], $_POST['nama'], $_POST['jk'], $_POST['alamat'], $_POST['gelar'], $_POST['masa_bakti'], $_POST['jabatan'], $_POST['quotes']];
            $cek = mysqli_num_rows($this->teacher->findTeacher($_POST['nip']));
            if ($cek > 0) {
                $errMsg = "Maaf, NIP sudah terdaftar";
                $data = $_POST;
            } else {
                $res = $this->teacher->create($value);
                if ($res == 1) {
                    $this->redirect('index.php?&r=teacher');
                } else {
                    $errMsg = $res;
                }
            }

        }

        $content = 'view/teacher/form.php';
        $header = 'Guru';
        $ttl = 'Tambah Guru';
        $formAction = 'http://localhost/CRUD-NATIVE/index.php?&r=teacher&op=create';
        include 'view/template/layout.php';
    }

    public function update()
    {
        $id = (isset($_GET['id']) ? $_GET['id'] : $_POST['id']);
        $data = mysqli_fetch_assoc($this->teacher->findTeacher($id));
        if (isset($_POST['nip'])) {
            $column = ['nama', 'jk', 'alamat', 'gelar', 'masa_bakti', 'level', 'quotes'];
            $value = [$_POST['nama'], $_POST['jk'], $_POST['alamat'], $_POST['gelar'], $_POST['masa_bakti'], $_POST['jabatan'], $_POST['quotes']];

            $res = $this->teacher->update($id, $column, $value);
            if ($res == 1) {
                $this->redirect('index.php?&r=teacher');
            } else {
                $errMsg = $res;
            }
        }


        $content = 'view/teacher/form.php';
        $header = 'Guru';
        $ttl = 'Ubah Guru';
        $formAction = 'http://localhost/CRUD-NATIVE/index.php?&r=teacher&op=update';
        include 'view/template/layout.php';
    }

    public function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$id) {
            throw new Exception('Internal error.');
        }

        $this->teacher->delete($id);

        $this->redirect('index.php?&r=teacher');
    }

}

?>
