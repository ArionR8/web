<?php

class Signup{
    private $fullname;
    private $email;
    private $username;
    private $password;
    private $conn;

    public function __construct($fullname,$email,$username,$password){
        $this->verifyStaticData($fullname,'Full Name');
        $this->verifyStaticData($username,'Username');
        $this->verifyPassword($password,'Password');
        $this->verifyEmail($email,'E-mail');
        $this->fullname = $fullname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->LoginToDb();
        $this->signupCustomer();
    }

    private function LoginToDb(){
        $conn = mysqli_connect('localhost','root','','happymindset');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            die();
        }
        $this->conn = $conn;
    }

    public function verifyStaticData($param,$errmsg){
        if(!isset($param) || empty($param)){
            header("Location: /web/layouts/pages/Home-page.php?errCode=".$param);   
            die();
        }
        return $param;
    }
    public function verifyPassword($password){
        if(!isset($password) || empty($password)){
            header("Location: /web/layouts/pages/Home-page.php?errCode=Password");   
            die();
        }
        if(strlen($password) < 7){
            header("Location: /web/layouts/pages/Home-page.php?errCode=Passwordlength"); 
            die();    
        }
        return $password;
    }
    public function verifyEmail($email){
        if(!isset($email) || empty($email)){
            header("Location: /web/layouts/pages/Home-page.php?errCode=Email");   
            die();
        }
        if(!str_contains($email,'@')){
            header("Location: /web/layouts/pages/Home-page.php?errCode=wrongMail");   
            die();
        }
        return $email;
    }

    private function hashPassword(){
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);

        return $hashedPassword;
    }

    private function signupCustomer(){
        $fullname = $this->fullname;
        $email = $this->email;
        $username = $this->username;
        $hashedPassword = $this->hashPassword();
        $conn = $this->conn;
        $sql = "INSERT INTO users (fullname, email, username, password) VALUES ('$fullname', '$email', '$username', '$hashedPassword')";
        if ($conn->query($sql) === TRUE) {          
            header("Location: /web/layouts/pages/Home-page.php?success=You Have Succesfully Signed up!, please login now!"); 
            $conn->close();  
            die();     
        } else {
            header("Location: /web/layouts/pages/Home-page.php?errCode="."Error: " . $sql . "<br>" . $conn->error);  
            $conn->close();  
            die();     
        } 
        
        header("Location: /web/layouts/pages/Home-page.php?success=Login Succesfully");     
        $conn->close();  
        die();     
    }

}

new Signup($_POST['fullname'],$_POST['email'],$_POST['username'],$_POST['password']);

?>
