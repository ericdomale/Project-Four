<?php
session_start();

$server_name = "127.0.0.1:3307";
$db_username = "root";
$db_password = "";
$db_name = "mossystem";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="SELECT * FROM login WHERE username='".$username."' AND password='".$password."'";
    $query_run = mysqli_query($connection,$query);

    $row = mysqli_fetch_array($query_run);

    if($row["usertype"] =="overseer")
    {
        $_SESSION['username'] =$username;
        header('location:../overseer/overseer.php');
    }

    elseif($row["usertype"] =="admin")
    {
        $_SESSION['username'] =$username;
        header('location:../administration/admin.php');
    }

    elseif($row["usertype"] =="finance")
    {
        $_SESSION['username'] =$username;
        header('location:../finance/finance.php');
    }

    elseif($row["usertype"] =="assistant")
    {
        $_SESSION['username'] =$username;
        header('location:../passistant/passistant.php');
    }

    elseif($row["usertype"] =="attendant")
    {
        $_SESSION['username'] =$username;
        header('location:../attendant/attendant.php');
    }

    elseif($row["usertype"] =="overcomer")
    {
        $_SESSION['username'] =$username;
        header('location:../overaccess/overaccess.php');
    }

    elseif($row["usertype"] =="breadoflife")
    {
        $_SESSION['username'] =$username;
        header('location:../breadaccess/breadaccess.php');
    }

    elseif($row["usertype"] =="breakthrough")
    {
        $_SESSION['username'] =$username;
        header('location:../breakaccess/breakaccess.php');
    }

    elseif($row["usertype"] =="morningstar")
    {
        $_SESSION['username'] =$username;
        header('location:../staraccess/staraccess.php');
    }

    elseif($row["usertype"] =="openheavens")
    {
        $_SESSION['username'] =$username;
        header('location:../opheavenaccess/opheavensaccess.php');
    }

    elseif($row["usertype"] =="dunamis")
    {
        $_SESSION['username'] =$username;
        header('location:../dunamisaccess/dunamisaccess.php');
    }

    elseif($row["usertype"] =="goodshepherd")
    {
        $_SESSION['username'] =$username;
        header('location:../goodaccess/goodaccess.php');
    }

    elseif($row["usertype"] =="holyhill")
    {
        $_SESSION['username'] =$username;
        header('location:../holyaccess/holyaccess.php');
    }

    elseif($row["usertype"] =="wellspring")
    {
        $_SESSION['username'] =$username;
        header('location:../wellaccess/wellaccess.php');
    }

    elseif($row["usertype"] =="passion")
    {
        $_SESSION['username'] =$username;
        header('location:../passionaccess/passionaccess.php');
    }

    else
    {
        $_SESSION['status'] ='Username or Password Not Valid';
        header('location:login.php');
    }

    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    
        <form class="login-form" method="POST">
            <div class="login-form__logo-container">
                <img class="login-form__logo" src="../mosimages/mos1.png" alt="Logo">
            </div>
            <div class="login-form__content">
                <div class="login-form__header">Login to your church account</div>
                <input class="login-form__input" type="text" name="username" placeholder="Username">
                <input class="login-form__input" type="password" name="password" placeholder="Password">
                <button class="login-form__button" type="submit" name="submit">Login</button>
                <div class="login-form__links">
                    <!--<a href="" class="login-form__link">Forgot Your Password?</a>-->
                </div>
            </div>
        </form>
   

</body>

</html>