<?php /*session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$erlid = $_GET['erlid'];

$query = "SELECT * FROM biblestudents WHERE erlid ='$erlid'";
$update = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bible School</title>
    <link rel="stylesheet" href="bible.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>

<body>

    <header>
        <!--<img src="../bicons/coin.svg" alt="logo" class="logo">
        <h2 class="heading">BIBLE SCHOOL</h2>
        <nav>
            <ul class="nav_links">
                <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/ ?></a></li>
                <li><a href="../schools/schools.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login"></button></a>-->

    </header>


    <div class="pup">
        
        <div class="container">
            <div class="title">Edit Details</div>
            <form action="" method="POST">
            <?php while ($row = mysqli_fetch_array($update)) { ?>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Enrol ID</span>
                        <input type="text" id="erlid" name="erlid" placeholder="Enter ID of Student" value="<?php echo $row['erlid'];?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Student Name</span>
                        <input type="text" name="fullname" id="fullname" placeholder="Enter Name of Student" value="<?php echo $row['fullname'];?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Date of Birth</span>
                        <input type="date" name="bdate" id="bdate" value="<?php echo $row['bdate'];?>" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Enrol Date</span>
                        <input type="date" name="erldate" id="erldate" value="<?php echo $row['erldate'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Program Duration</span>
                        <input type="text" name="duration" id="duration" placeholder="Enter Program Duration" value="<?php echo $row['duration'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Start Date</span>
                        <input type="date" name="startdate" id="startdate" value="<?php echo $row['startdate'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">End Date</span>
                        <input type="date" name="enddate" id="enddate" value="<?php echo $row['enddate'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Month</span>
                        <select name="erlmonth" id="erlmonth" value="<?php echo $row['erlmonth'];?>">
                            <option value="<?php echo $row['erlmonth'];?>"><?php echo $row['erlmonth'];?></option>
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
                        <span class="details">Contact</span>
                        <input type="text" name="contact" id="contact" required placeholder="Enter Contact" value="<?php echo $row['contact'];?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Res.Address/GPS</span>
                        <input type="text" name="maddress" id="maddress" required placeholder="Enter Address" value="<?php echo $row['maddress'];?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Current Status</span>
                        <select name="cstatus" id="cstatus" value="<?php echo $row['cstatus'];?>">
                            <option value="<?php echo $row['cstatus'];?>"><?php echo $row['cstatus'];?></option>
                            <option value="Church Member">Church Member</option>
                            <option label="Non-member" value="Non-member"></option>
                        </select>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="edited" id="mstudent">
                </div>
            <?php } ?>
            </form>
        </div>

    </div>


    <?php 
    if (isset($_POST['edited']))
    {
         $erlid = $_POST['erlid'];
         $fullname = $_POST['fullname'];
         $bdate = $_POST['bdate'];
         $erldate = $_POST['erldate'];
         $duration = $_POST['duration'];
         $startdate = $_POST['startdate'];
         $enddate = $_POST['enddate'];
         $erlmonth = $_POST['erlmonth'];
         $contact = $_POST['contact'];
         $maddress = $_POST['maddress'];
         $cstatus = $_POST['cstatus'];

                        
         $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
         $query = "UPDATE `biblestudents` SET erlid='$_POST[erlid]',fullname='$_POST[fullname]',bdate='$_POST[bdate]',duration='$_POST[duration]',startdate='$_POST[startdate]',enddate='$_POST[enddate]',erlmonth='$_POST[erlmonth]',maddress='$_POST[maddress]',cstatus='$_POST[cstatus]' WHERE erlid='$_POST[erlid]'";
         $queryrun = mysqli_query($conn,$query);

         if ($queryrun)
            {
        $_SESSION['success'] ="Details Updated";
        header('location: pasbible.php');
        }else
        {
        $_SESSION['status'] ="Details Not Updated";
        header('location: pasbible.php'); 
        }
                    
        echo "<script>window.location.href='pasbible.php'</script>";

        }

    ?>


  


            <script src="../jquery/datatables.js"></script>
            <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="bible.js"></script>


</html>