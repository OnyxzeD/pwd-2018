<?php

require_once 'model/Student.php';
require_once 'model/Services.php';

class StudentController
{

    private $student = NULL;
    private $services = NULL;
    private $conn;

    public function __construct()
    {
        $this->services = new Services();
        $this->conn = $this->services->openDb();
        $this->student = new Student();
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
            } elseif ($op == 'display') {
                $this->displayImport();
            } elseif ($op == 'import') {
                $this->formImport();
            } elseif ($op == 'save-import') {
                $this->Import();
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
        $data = $this->student->getOrder("status ASC");
        $content = 'view/student/index.php';
        $header = 'Siswa';
        include 'view/template/layout.php';
    }

    public function save()
    {
        if (isset($_POST['nis']) && isset($_POST['nama'])) {
            $value = [$_POST['nis'], $_POST['nama'], $_POST['jk'], $this->convertDate($_POST['tgl_lahir'], 'db'), $_POST['alamat'], $_POST['nama_ortu'], $_POST['telp_ortu'], $_POST['status']];
            $cek = mysqli_num_rows($this->student->findStudent($_POST['nis']));
            if ($cek > 0) {
                $errMsg = "Maaf, NIS sudah terdaftar";
                $data = $_POST;
            } else {
                $res = $this->student->create($value);
                if ($res == 1) {
                    $this->redirect('index.php?&r=student');
                } else {
                    $errMsg = $res;
                }
            }

        }

        $content = 'view/student/form.php';
        $header = 'Siswa';
        $ttl = 'Tambah Siswa';
        $formAction = 'http://localhost/CRUD-NATIVE/index.php?&r=student&op=create';
        include 'view/template/layout.php';
    }

    public function formImport()
    {
        if (isset($_POST['import'])) {
            $filename = $_FILES["file"]["tmp_name"];
            if ($_FILES["file"]["size"] > 0) {
                $file = fopen($filename, "r");
                $data = [];
                while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
                    $value = [$getData[0], $getData[1], $getData[2], $this->convertDate($getData[3], 'indo'), $getData[4], $getData[5], $getData[6], $getData[7]];
                    $cek = mysqli_num_rows($this->student->findStudent($getData[0]));
                    if ($cek <= 0) {
                        array_push($data, $value);
                    }
                }

                fclose($file);
            }
        }

        $content = 'view/student/upload.php';
        $header = 'Siswa';
        $ttl = 'Import Siswa';
        include 'view/template/layout.php';
    }

    public function Import()
    {
        echo $_POST['total'] . "<br>";
        echo $_POST['mencoba'] . "<br>";
        $sql = "INSERT into siswa VALUES ";
        for ($total = 1; $total < $_POST['total']; $total++) {
            if (($total + 1) == $_POST['total']) {
                $sql .= "('" . $_POST['nis' . $total] . "','" . $_POST['nama' . $total] . "','" . $_POST['jk' . $total] . "','" . $this->convertDate($_POST['tgl_lahir' . $total], 'db') . "','" . $_POST['alamat' . $total] . "','" . $_POST['nama_ortu' . $total] . "','" . $_POST['telp_ortu' . $total] . "','" . $_POST['status' . $total] . "');";
            } else {
                $sql .= "('" . $_POST['nis' . $total] . "','" . $_POST['nama' . $total] . "','" . $_POST['jk' . $total] . "','" . $this->convertDate($_POST['tgl_lahir' . $total], 'db') . "','" . $_POST['alamat' . $total] . "','" . $_POST['nama_ortu' . $total] . "','" . $_POST['telp_ortu' . $total] . "','" . $_POST['status' . $total] . "'),";
            }
        }

        if (mysqli_query($this->conn, $sql)) {
            $this->redirect('index.php?&r=student');
        } else {
            echo mysqli_error($this->conn);
        }

        mysqli_close($this->conn);
    }

    public function displayImport()
    {
        if (isset($_POST['import'])) {
            $filename = $_FILES["file"]["tmp_name"];
            if ($_FILES["file"]["size"] > 0) {
                $file = fopen($filename, "r");
                while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
                    $value = [$getData[0], $getData[1], $getData[2], $getData[3], $getData[4], $getData[5], $getData[6], $getData[7]];
                    $cek = mysqli_num_rows($this->student->findStudent($getData[0]));
                    if ($cek <= 0) {
                        $this->student->create($value);
                    }
                }

                fclose($file);
            }

            $this->redirect('index.php?&r=student');
        }

        $content = 'view/student/display.php';
        include 'view/student/display.php';
    }

    public function update()
    {
        $id = (isset($_GET['id']) ? $_GET['id'] : $_POST['id']);
        $data = mysqli_fetch_assoc($this->student->findStudent($id));
        $data['tgl_lahir'] = $this->convertDate($data['tgl_lahir'], 'indo');
        if (isset($_POST['nis'])) {
            $column = ['nis', 'nama', 'jk', 'tgl_lahir', 'alamat', 'nama_ortu', 'telp_ortu', 'status'];
            $value = [$_POST['nis'], $_POST['nama'], $_POST['jk'], $this->convertDate($_POST['tgl_lahir'], 'db'), $_POST['alamat'], $_POST['nama_ortu'], $_POST['telp_ortu'], $_POST['status']];

            $res = $this->student->update($id, $column, $value);
            if ($res == 1) {
                $this->redirect('index.php?&r=student');
            } else {
                $errMsg = $res;
            }
        }


        $content = 'view/student/form.php';
        $header = 'Siswa';
        $ttl = 'Ubah Siswa';
        $formAction = 'http://localhost/CRUD-NATIVE/index.php?&r=student&op=update';
        include 'view/template/layout.php';
    }

    public function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        if (!$id) {
            throw new Exception('Internal error.');
        }

        $this->student->delete($id);

        $this->redirect('index.php?&r=student');
    }

    public function convertDate($data, $format)
    {
        if ($data == '-' || $data == null || $data == ' ') {
            return "-";
        }

        if ($format == 'indo') {
            $date = explode("-", $data);
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

}

?>
