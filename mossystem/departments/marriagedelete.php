
<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
$erlid = $_GET['erlid'];

$conn = new mysqli('127.0.0.1:3307','root','','mossystem');
mysqli_query($conn, "DELETE FROM marriage WHERE erlid = '$erlid'");

header("location: marriage.php");

?>
