<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

 $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
 $titid = $_GET['titid'];

 $query = "SELECT * FROM tithes WHERE titid='$titid'";
 $update = mysqli_query($conn,$query);
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overall Edit</title>
    <link rel="stylesheet" href="tithedit.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>
    
<header>
        <!--<img src="../bicons/coin.svg" alt="logo" class="logo">
        <h2 class="heading">TITHES</h2>
        <nav>
            <ul class="nav_links">
                <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
                <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">Add Tithe</button></a>-->

    </header>

    <div class="pup">
        

        <div class="container">
            <div class="title">Add Record</div>
            <form action="" method="POST">
            <?php while ($row = mysqli_fetch_array($update)) { ?>
                <div class="user-details">
                    <div class="input-box" hidden>
                        <span class="details">Tithe ID</span>
                        <input type="text" id="titid" name="titid"  value="<?php echo $row['titid'];?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Week</span>
                        <input type="week" name="titweek" id="titweek" value="<?php echo $row['titweek'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date</span>
                        <input type="date" name="titdate" id="titdate"  value="<?php echo $row['titdate'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Month</span>
                        <select name="titmonth" id="titmonth" value="<?php echo $row['titmonth'];?>">
                            <option value="<?php echo $row['titmonth'];?>"><?php echo $row['titmonth'];?></option>
                            <option value="January">January</option>
                            <option label="February" value="February"></option>
                            <option label="March" value="March"></option>
                            <option label="April" value="April"></option>
                            <option label="May" value="May"></option>
                            <option label="June" value="June"></option>
                            <option label="July" value="July"></option>
                            <option label="August" value="August"></option>
                            <option label="September" value="September"></option>
                            <option label="October" value="October"></option>
                            <option label="November" value="November"></option>
                            <option label="December" value="December"></option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Program</span>
                        <select name="titprogram" id="titprogram" value="<?php echo $row['titprogram'];?>">
                            <option  value="<?php echo $row['titprogram'];?>"><?php echo $row['titprogram'];?></option>
                            <option name="Sunday Service" label="Sunday Service" value="Sunday Service">Sunday Service
                            </option>
                            <option name="Anointing Service" label="Anointing Service" value="Anointing Service">
                                Anointing Service</option>
                            <option name="Thanksgiving Service" label="Thanksgiving Service"
                                value="Thanksgiving Service">Thanksgiving Service</option>
                            <option name="Special Service" label="Special Service" value="Special Service">Special
                                Service</option>
                            <option name="Tuesday Service" label="Tuesday Service" value="Tuesday Service">Tuesday
                                Service</option>
                            <option name="Friday Night Service" label="Friday Night Service"
                                value="Friday Night Service">Friday Night Service</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Amount</span>
                        <input type="text" name="titamount" id="titamount" value="<?php echo $row['titamount'];?>" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Update" name="edited" id="edited">
                </div>
                <?php } ?>
            </form>
        </div>
        
    </div>
    
    <?php 
                    if (isset($_POST['edited']))
                    {
                        $titweek = $_POST['titweek'];
                        $titdate = $_POST['titdate'];
                        $titmonth = $_POST['titmonth'];
                        $titprogram = $_POST['titprogram'];
                        $titamount = $_POST['titamount'];
                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `tithes` SET titweek='$_POST[titweek]',titdate='$_POST[titdate]',titmonth='$_POST[titmonth]',titprogram='$_POST[titprogram]',titamount='$_POST[titamount]' WHERE titid='$_POST[titid]'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Records Updated";
                             header('location:fintithe.php');
                         }else
                         {
                             $_SESSION['status'] ="Records Not Updated";
                             header('location:fintithe.php'); 
                         }
                    
                        echo "<script>window.location.href='fintithe.php'</script>";

                    }


                    ?>
</body>
</html>