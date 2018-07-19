<?php
require_once 'model/Services.php';
require_once 'model/General.php';

class Student
{
    private $services = NULL;
    private $general = NULL;
    private $conn;

    public function __construct()
    {
        $this->services = new Services();
        $this->general = new General();
        $this->conn = $this->services->openDb();
    }

    public function findStudent($id)
    {
        try {
            $res = $this->general->selectBy("siswa", "*", "nis = '$id'");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function get()
    {
        try {
            $res = $this->general->selectAll("siswa");
            $this->services->closeDb($this->conn);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function getOrder($order)
    {
        try {
            $res = $this->general->selectOrder("siswa", $order);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function create($value)
    {
        try {
            $column = ['nis', 'nama', 'jk', 'tgl_lahir', 'alamat', 'nama_ortu', 'telp_ortu', 'status'];
            $res = $this->general->insert('siswa', $column, $value);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function update($id, $column, $value)
    {
        try {
            $res = $this->general->update('siswa', $column, $value, "nis = '$id'");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            $res = $this->general->delete('siswa', "nis = '$id'");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function totalStudent()
    {
        try {
            $res = mysqli_query($this->conn, "SELECT COUNT(nis) as total FROM siswa WHERE status <> 7");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

}

?>
