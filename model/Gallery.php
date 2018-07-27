<?php
require_once 'model/Services.php';
require_once 'model/General.php';

class Gallery
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

    public function find($id)
    {
        try {
            $res = $this->general->selectBy("gallery", "*", "id = '$id'");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function get()
    {
        try {
            $res = $this->general->selectAll("gallery");
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
            $res = $this->general->selectOrder("gallery", $order);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function create($value)
    {
        try {
            $column = ['id', 'nama_album', 'created_at', 'created_by'];
            $res = $this->general->insert('album', $column, $value);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function update($id, $column, $value)
    {
        try {
            $res = $this->general->update('album', $column, $value, "id = '$id'");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            $res = $this->general->delete('gallery', "id = '$id'");

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function getId()
    {
        return $this->general->generateId('id', 'album', 'AB');
    }

}

?>
