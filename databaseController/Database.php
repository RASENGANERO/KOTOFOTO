<?php
   class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "kotofoto";
    private $conn;

    public function __construct() {
        $this->connect();
    }
    private function connect() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Проверка соединения
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    public function addMessage($dataValues) {
        $stmt = $this->conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die("Error preparing statement: " . $this->conn->error);
        }
        $stmt->bind_param("sss", $dataValues['name'], $dataValues['email'], $dataValues['message']);
        $response = [];
        if (!$stmt->execute()) {
            $response=['status'=>'error', 'data'=>$stmt->error];   
        }
        else{
            $response=['status'=>'success', 'data'=>'Вы успешно отправили сообщение!'];
        }
        $stmt->close();
        return $response;
    }
    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

?>