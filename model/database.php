<?php

class Database
{

    public $connection;

    function __construct()
    {
        $this->open_db_connection();
    }
    public function open_db_connection()
    {
        // $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->confirm_connection_database();
    }

    private function confirm_connection_database() {

        if($this->connection->connect_errno) {
            die("Connect Database Failed!" . $this->connection->connect_error);
        }
    }
    public function query($sql)
    {
        // $result = mysqli_query($this->connection, $sql);

        // $result = $this->connection->query($sql);

        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->confirm_query($result);


        return $result;
    }

    private function confirm_query($result)
    {
        if (!$result) {
            die("Query Failed!" . $this->connection->error);
        }
    }
    
    // Việc sử dụng prepare trước khi thực hiện truy vấn sẽ thay thế lỗi bảo mật injection tương tự
    public function escape_string($string) {
        // $escape_string = mysqli_real_escape_string($this->connection, $string);
        $escape_string = $this->connection->real_escape_string($string);

        return $escape_string;
    }

    public function the_insert_id() {
        return $this->connection->insert_id;
    }
}


