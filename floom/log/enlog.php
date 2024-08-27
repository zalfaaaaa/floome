<?php

session_start();

include('connect.php');

$usn = $_POST['username'];
$pw = $_POST['password'];

$query = $hiu->query("SELECT * FROM account WHERE username='$usn' AND password='$pass'");
$data = $query->fetch();

if($query){
    header('location:../menu.php');
}else{
    header('location:../homePage.php');
}