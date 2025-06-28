<?php

class Database {
    private $db_host = "localhost";
    private $db_username = "root";
    private $db_password = "";
    private $db_name = "todo_app_oop";

    public $conn;

    public function connection() {
        $this->conn = null;

        
        try {
            $this->conn = new mysqli($this->db_host, $this->db_username, $this->db_password, $this->db_name);

            if ($this->conn->connect_error) {
                die("connection failed" . $this->conn->connect_error);
            }
            echo "yes it's connected";

        } catch (Exception $error) {
            echo "connection error" . $error->getMessage();
        }

       
        return $this->conn;
    }

}