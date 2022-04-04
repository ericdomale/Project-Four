<?php /*session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
 $id = $_GET['id'];

 $query = "SELECT * FROM jointithes WHERE id='$id'";
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
                    <div class="input-box">
                        <span class="details">Corporate ID</span>
                        <input type="text" id="cid" name="cid" value="<?php echo $row['cid'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Company Name</span>
                        <input type="text"  name="company" id="company" value="<?php echo $row['company'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Paid By</span>
                        <input type="text"  name="fullname" id="fullname" value="<?php echo $row['fullname'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact</span>
                        <input type="text"  name="contact" id="contact" value="<?php echo $row['contact'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date</span>
                        <input type="date" name="titdate" id="titdate" value="<?php echo $row['titdate'];?>" required>
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
                        <span class="details">Amount</span>
                        <input type="text" name="titamount" id="titamount" value="<?php echo $row['titamount'];?>" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="edited" id="edited">
                </div>
                <?php } ?>
            </form>
        </div>
        
    </div>
    
    <?php 
                    if (isset($_POST['edited']))
                    {
                        $cid = $_POST['cid'];
                        $company = $_POST['company'];
                        $fullname = $_POST['fullname'];
                        $contact = $_POST['contact'];
                        $titdate = $_POST['titdate'];
                        $titmonth = $_POST['titmonth'];
                        $titamount = $_POST['titamount'];
                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `jointithes` SET cid='$_POST[cid]', company='$_POST[company]', fullname='$_POST[fullname]', contact='$_POST[contact]',titdate='$_POST[titdate]',titmonth='$_POST[titmonth]',titamount='$_POST[titamount]' WHERE id='$id'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Records Updated";
                             header('location:tithe.php');
                         }else
                         {
                             $_SESSION['status'] ="Records Not Updated";
                             header('location:tithe.php'); 
                         }
                    
                        echo "<script>window.location.href='tithe.php'</script>";

                    }


                    ?>
</body>
</html>