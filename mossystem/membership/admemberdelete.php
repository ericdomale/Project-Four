
<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$memberno = $_GET['memberno'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM membership WHERE memberno = '$memberno'");



header("location: admembership.php");


?>
