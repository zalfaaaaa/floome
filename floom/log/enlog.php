<?php

session_start();

include('connect.php');

$id = $_POST['id'];
$nm = $_POST['name'];
$usn = $_POST['username'];
$pw = $_POST['password'];

$query = $hiu->query("INSERT INTO `account`(`id`, `name`, `username`, `password`) VALUES ('$id','$nm','$usn','$pw')");
$data = $query->fetchAll();

if($query){
    header('location:../menu.php');
}else{
    header('location:homeage.php');
}