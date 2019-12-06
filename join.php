<?php
header("Content-Type:text/html; charset=utf-8");
$conn = new mysqli("localhost","root","dusqls1196","registration")
mysqli_query($conn,'SET NAMES utf8');
$id = $_POST['id'];
$userkname = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$sql="INSERT INTO `users`(`id`, `password`, `username`, `email`, ) VALUES ('$id','$password','$username','$email')";
$res = $conn->query($sql);
echo "<script>location.href='login.html';</script>";
?>
