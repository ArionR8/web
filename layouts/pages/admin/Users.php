<?php
class Users{
    private $conn;

    public function __construct() {
        $this->loginToDb();
    }

    private function loginToDb() {
        $conn = mysqli_connect('localhost', 'root', '', 'happymindset');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $this->conn = $conn;
    }
    public function getAllUsers(){
        $conn = $this->conn;
        $sql = "SELECT user_ID, fullname, email, username FROM users";
        $result = $conn->query($sql);

        if ($result) {
            $rows = array();

            while ($row = $result->fetch_object()) {
                $rows[] = $row;
            }
        
            return $rows;
        } else {
            return 0;
        }
    }

    public function countUsers() {
        $conn = $this->conn;
        $sql = "SELECT COUNT(*) as user_count FROM users";
        $result = $conn->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            return $row["user_count"];
        } else {
            return 0;
        }
    }
    public function countReportsByUsers() {
        $conn = $this->conn;
        $sql = "SELECT COUNT(*) as report_count FROM report_error";
        $result = $conn->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            return $row["report_count"];
        } else {
            return 0;
        }
    }
    public function countBooks() {
        $conn = $this->conn;
        $sql = "SELECT COUNT(*) as book_count FROM books";
        $result = $conn->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            return $row["book_count"];
        } else {
            return 0;
        }
    }    
    public function getAllReports() {
            $conn = $this->conn;
            $sql = "SELECT Username, text FROM report_error";
            $result = $conn->query($sql);
    
        if ($result) {
            $reports = array();
    
            while ($row = $result->fetch_object()) {
                $reports[] = $row;
            }
            return $reports;
            } else {
                return 0;
            }
    }
}
