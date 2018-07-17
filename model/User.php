<?php
require_once 'model/Services.php';
require_once 'model/General.php';

class User
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

    public function findUser($id)
    {
        try {
            $res = $this->general->selectBy("user", "*", "status = '$id'");
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
            $res = $this->general->update('user', $column, $value, $id);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            $res = $this->general->delete('user', $id);

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
