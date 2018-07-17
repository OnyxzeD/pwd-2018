<?php
require_once 'model/Services.php';

/**
 * Table data Categories.
 *
 *  OK I'm using old MySQL driver, so kill me ...
 *  This will do for simple apps but for serious apps you should use PDO.
 */
class General
{
    private $services = NULL;
    private $conn;

    public function __construct()
    {
        $this->services = new Services();
        $this->conn = $this->services->openDb();
    }

    public function selectAll($table)
    {
        $sql = "SELECT * FROM " . $table;

        return mysqli_query($this->conn, $sql);
    }

    public function selectBy($table, $column, $condition)
    {
        $sql = "SELECT ";

        if ($column == '*') {
            $sql .= "* FROM " . $table . " WHERE " . $condition;
        } else {
            for ($i = 0; $i <= count($column) - 1; $i++) {
                $sql += $column[$i];
                if ($i < count($column) - 1) {
                    $sql .= ",";
                }
            }

            $sql .= " FROM " . $table . " WHERE " . $condition;
        }

        return mysqli_query($this->conn, $sql);
    }

    public function insert($table, $column, $value)
    {

        $sql = "INSERT INTO " . $table . " (";
        for ($i = 0; $i <= count($column) - 1; $i++) {
            $sql .= $column[$i];
            if ($i < count($column) - 1) {
                $sql .= ",";
            }
        }
        $sql .= ") VALUES(";
        for ($i = 0; $i <= count($value) - 1; $i++) {
            $sql .= "'" . $value[$i] . "'";
            if ($i < count($value) - 1) {
                $sql .= ",";
            }
        }

        $sql .= ")";

        return mysqli_query($this->conn, $sql);
    }

    public function update($table, $column, $value, $id)
    {
        $sql = "UPDATE " . $table . " SET ";

        for ($i = 0; $i <= count($column) - 1; $i++) {
            $sql .= $column[$i] . "='" . $value[$i] . "'";
            if ($i < count($column) - 1) {
                $sql .= ",";
            }
        }

        $sql .= " WHERE id = " . $id;

        return mysqli_query($this->conn, $sql);
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM " . $table . " WHERE id = " . $id;

        return mysqli_query($this->conn, $sql);
    }

    public function generateId($key, $table, $prefix)
    {
        $sql = mysqli_query($this->conn, "SELECT MAX($key) as max FROM $table");
        $data = null;
        $code = "";
        if (mysqli_num_rows($sql) > 0) {
            $data = mysqli_fetch_assoc($sql);
            $str = preg_replace('/\D/', '', $data['max']);
            $count = intval($str);
            if ($count < 10) {
                $code = $prefix . "000" . ($count + 1);
            } else if ($count < 100) {
                $code = $prefix . "00" . ($count + 1);
            } else if ($count < 1000) {
                $code = $prefix . "0" . ($count + 1);
            } else {
                $code = $prefix . "" . ($count + 1);
            }
        }

        return $code;
    }

}

?>
