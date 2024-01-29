<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['role']);
header("Location: /web/layouts/pages/Home-page.php?success=You have been logged out succesfully!"); 


?>
