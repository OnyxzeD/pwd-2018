<?php
require_once 'model/ValidationException.php';


class Services
{
    public function openDb()
    {
        if (!$conn = mysqli_connect("localhost", "root", "", "crud")) {
            throw new Exception("Connection to the database server failed! " . mysqli_connect_error());
        }

        return $conn;
    }

    public function closeDb($conn)
    {
        mysqli_close($conn);
    }
}

?>
