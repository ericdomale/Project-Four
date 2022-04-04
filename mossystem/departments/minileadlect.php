<?php
session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

//DATABASE CONNECTION
$conn = new mysqli('127.0.0.1:3307','root','','mossystem');


if (isset($_POST['lecturer']))
{
    $ltid = $_POST['ltid'];
    $fullname = $_POST['fullname'];
    $appdate = $_POST['appdate'];
    $school = $_POST['school'];
    $qualify = $_POST['qualify'];
    $trainings = $_POST['trainings'];
    $lectstatus = $_POST['lectstatus'];
   
  

if ($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{

    $query =  "INSERT into mdlecturers (ltid, fullname, appdate, school, qualify, trainings, lectstatus)
     VALUES ('$ltid', '$fullname', '$appdate','$school', '$qualify', '$trainings', '$lectstatus')";
    $queryrun = mysqli_query($conn,$query);

 
 if ($queryrun)
    {
        
        
        header('location: minilead.php');
        echo 'New Record Added';
    }else
    {
        header('location: minilead.php'); 
        echo 'New Record Not Added';
        

       
    }
}
}
?>
