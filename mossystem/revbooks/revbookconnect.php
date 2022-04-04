<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['revbook']))
{

$revtitle = $_POST['revtitle'];
$revdate = $_POST['revdate'];
$pubstatus = $_POST['pubstatus'];
$isbn = $_POST['isbn'];
$quantity = $_POST['quantity'];
$editors = $_POST['editors'];
$pubhouse = $_POST['pubhouse'];



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into revbooks (revtitle, revdate, pubstatus, isbn, quantity, editors, pubhouse)
    values('$revtitle', '$revdate', '$pubstatus', '$isbn', '$quantity', '$editors', '$pubhouse')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
       
      
    header('location:revbooks.php');
   
        
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>
