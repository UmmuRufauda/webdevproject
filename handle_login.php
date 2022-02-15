<?php
include"config.php";

if(isset($_POST['login']))
{
$userEmail = $_POST["email"];
$userPass = $_post["password"];

//compare
$sql = "SELECT * FROM `user` WHERE email='$userEmail' and password='$userPass'";
}

?>