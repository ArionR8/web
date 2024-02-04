<?php

$conn = mysqli_connect('localhost','root','','happymindset');

$username = $_POST["username"];
$reportError = $_POST["reportError"];

$sql = "INSERT INTO report_error (Username, text) VALUES ('$username', '$reportError')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./Home-page.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
die();
$conn->close();

?>