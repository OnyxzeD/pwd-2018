<?php
require_once 'model/Services.php';
require_once 'model/General.php';

class News
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

    public function findBerita($id)
    {
        try {
            $res = $this->general->selectBy("berita", "*", "id = '$id'");
            $this->services->closeDb($this->conn);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function findBy($condition)
    {
        try {
            $res = $this->general->selectBy("berita", "*", $condition);
            $this->services->closeDb($this->conn);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function get()
    {
        try {
            $res = $this->general->selectAll("berita");
            $this->services->closeDb($this->conn);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function create($value)
    {
        try {
            $id = $this->general->generateId('id', 'berita', 'BRT');
            array_unshift($value, $id);
            $column = ['id', 'judul', 'isi', 'tags', 'thumbnail', 'penulis', 'created_at'];
            $res = $this->general->insert('berita', $column, $value);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function update($id, $column, $value)
    {
        try {
            $res = $this->general->update('berita', $column, $value, "id = '$id'");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function addCounter($id)
    {
        try {
            $data = mysqli_fetch_assoc($this->findBerita($id));
            $res = $this->general->update('berita', ['counter'], [($data['counter'] + 1)], "id = '$id'");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            $res = $this->general->delete('berita', "id = '$id'");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }
}

?>
