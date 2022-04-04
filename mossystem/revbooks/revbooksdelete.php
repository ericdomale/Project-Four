<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$revid = $_GET['revid'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM revbooks WHERE revid = '$revid'");



header("location: revbooks.php");


?>
