<?php
require_once 'model/Services.php';
require_once 'model/General.php';

class Front
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

    public function listGuru()
    {
        try {
            $res = $this->general->selectOrder("guru", "nama ASC");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function listBerita()
    {
        try {
            $res = $this->general->selectOrder("berita", "created_at ASC limit 5");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function listDetailBerita($id)
    {
        try {
            // update counter
            $res = $this->general->selectBy("berita","*", "id='".$id."'");
            $data = mysqli_fetch_assoc($res);
            $this->general->update('berita', ['counter'], [($data['counter'] + 1)], "id = '$id'");

            return $data;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function listGaleri()
    {
        try {
            $res = $this->general->selectOrder("gallery", "id ASC");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }


    public function get()
    {
        try {
            $res = $this->general->selectAll("user");
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
            $id = $this->general->generateId('id', 'user', 'US');
            array_unshift($value, $id);
            $column = ['id', 'username', 'password', 'email', 'level', 'status'];
            $res = $this->general->insert('user', $column, $value);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function update($id, $column, $value)
    {
        try {
            $res = $this->general->update('user', $column, $value, "id = '$id'");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            $res = $this->general->delete('user', "id = '$id'");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function auth($email, $pass)
    {
        try {
            $sql = "SELECT * FROM user WHERE email = '" . $email . "' AND password = '" . $pass . "'";

            return mysqli_query($this->conn, $sql);
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }
}

?>
