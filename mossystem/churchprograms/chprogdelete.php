<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$chprogid = $_GET['chprogid'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM chprograms WHERE chprogid = '$chprogid'");



header("location: program.php");


?>