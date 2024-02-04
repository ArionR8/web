<?php
session_start();
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "happymindset";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
    public function getConnection() {
        return $this->conn;
    }
}

class Authentication {
    private $db;

    public function __construct() {
        $db = new Database();
        $this->db = $db;
    }

    public function LoginUser($username, $password){
            

        $conn = $this->db->getConnection();
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($query);


        if ($result){
            $row = $result->fetch_assoc();
            $hashedPasswordFromDB = $row['password'];  

            if (password_verify($password,$hashedPasswordFromDB)) {
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $row['role'];
                header("Location: /web/layouts/pages/Home-page.php?success=You have succesfully logged in!");
                exit();
            }else{
                header("Location: /web/layouts/pages/Home-page.php?error=Login failed. Please try again.");
                exit();
            }
        }
        
        $this->db->closeConnection();
    }
}


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $auth = new Authentication();
        $username = $_POST['username'];
        $password = $_POST['password'];

        $auth->loginUser($username, $password);
    }


?>
