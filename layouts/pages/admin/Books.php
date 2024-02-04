<?php


class Books {

    private $conn;
    
    private function LoginToDb(){
        $conn = mysqli_connect('localhost','root','','happymindset');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            die();
        }
        $this->conn = $conn;
    }

    function uploadFile($file){
        $targetDir = '../../../uploads/';
        $fileName = basename($file["name"]);
        $targetFile = $targetDir . $fileName;

        $check = getimagesize($file["tmp_name"]);
        if($check !== false) {
            if(move_uploaded_file($file["tmp_name"], $targetFile)) {
                return $fileName;
            } else {
                return false;
            }
        } else {                
            return false;
        }
    }
    
    public function createBook($files,$post){
        $file_front = $this->uploadFile($files["file_front"]);
        $file_back = $this->uploadFile($files["file_back"]);
        if($file_front && $file_back){
            $this->LoginToDb();
            $conn = $this->conn;

            $title = $post['title'];
            $sql = "INSERT INTO books (title,image_front,image_back) VALUES ('$title', '$file_front', '$file_back')";
            if ($conn->query($sql) === TRUE) {          
                header("Location: /web/layouts/pages/admin/Add-books.php?success=You Have Succesfully Create The Book"); 
                $conn->close();  
                die();     
            } else {
                header("Location: /web/layouts/pages/admin/Add-books.php?error"."Error: " . $sql . "<br>" . $conn->error);  
                $conn->close();  
                die();     
            } 
        }
    }

    public function getAllBooks(){
        $this->LoginToDb();
        $conn = $this->conn;
        $sql = "SELECT * FROM books";
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
}
