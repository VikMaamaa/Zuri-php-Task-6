<?php
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );
class Dbh{
    public $hostname = "localhost";
    public $username = "root2";
    public $password = "zuriphp";
    public $dbname = "";

    protected function connect() {
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        if(!$conn){
            echo "<script> alert('Error connecting to the database') </script>";
        }
        return $conn;
    }
}

