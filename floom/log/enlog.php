<?php

session_start();

include('connect.php');

$id = $_POST['id'];
$nm = $_POST['Name'];
$usn = $_POST['Username'];
$pw = $_POST['Password'];

$query = $maru->query("INSERT INTO `account`(`id`, `Name`, `Username`, `Password`) VALUES ('$id','$nm','$usn','$pw')");
$data = $query->fetchAll();

if($query){
    header('location:../menu.php');
}else{
    header('location:homeage.php');
}