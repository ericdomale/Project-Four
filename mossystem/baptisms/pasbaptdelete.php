<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$baptid = $_GET['baptid'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM baptisms WHERE baptid = '$baptid'");



header("location: pasbaptisms.php");


?>