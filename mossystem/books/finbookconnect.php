<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 $connection = new mysqli('127.0.0.1:3307','root','','mossystem');
?>


<?php


if (isset($_POST['book']))
{


    $bktitle = $_POST['bktitle'];
    $pubstatus = $_POST['pubstatus'];
    $bkdate = $_POST['bkdate'];
    $quantity = $_POST['quantity'];
    $bktotal = $_POST['bktotal'];
    $isbn = $_POST['isbn'];
    $pubcost = $_POST['pubcost'];
    $retamount = $_POST['retamount'];
    



if ($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{

    $query = "INSERT into books ( bktitle, pubstatus, bkdate, quantity, bktotal, isbn, pubcost, retamount)
    values( '$bktitle', '$pubstatus', '$bkdate', '$quantity', '$bktotal', '$isbn', '$pubcost', '$retamount')";


    $queryrun = mysqli_query($connection, $query);

    if ($queryrun)
    {
      

 
    header('location:finbooks.php');
   
        
    }

    else
    {
        echo "Record Fail";
    }
  
 
}
}


?>
