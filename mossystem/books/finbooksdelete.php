<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$bkid = $_GET['bkid'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM books WHERE bkid = '$bkid'");



header("location: finbooks.php");


?>