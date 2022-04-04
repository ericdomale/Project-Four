<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$memberno = $_GET['memberno'];

$query = "SELECT * FROM membership WHERE memberno='$memberno'";
$update = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membership Edit</title>
    <link rel="stylesheet" href="membership.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
    <link rel="stylesheet" href="../jquery/font-awesome.css" media="all">
</head>

<body>

    <header>
        <!--<img src="../icons/User/user-3-line.svg" alt="logo" class="logo">
        <h2 class="heading"></h2>
        <nav>
            <ul class="nav_links">
                <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
                <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <li><a href="#" class="person" id="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">Add Member</button></a>-->

    </header>




    <div class="pup">
        

        <div class="container">
            <div class="title">Edit Details</div>
            <form action="" method="POST">
            <?php while ($row = mysqli_fetch_array($update)) { ?>

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Member ID</span>
                        <input type="text" id="memberno" name="memberno" value="<?php echo $row['memberno'];?>" readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" value="<?php echo $row['fullname'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">D.O.B</span>
                        <input type="date" placeholder="Enter Date of Birth" name="memdate" id="memdate"  value="<?php echo $row['memdate'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Gender</span>
                        <select name="gender" id="gender" class="gender" value="<?php echo $row['gender'];?>" required>
                            <option value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?></option>
                            <option value="Male" name="male" class="male">Male</option>
                            <option label="Female" value="Female" name="female" class="female"></option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Status</span>
                        <select name="status" id="status" value="<?php echo $row['status'];?>" required>
                            <option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
                            <option name="Single" value="Single">Single</option>
                            <option name="Married" label="Married" value="Married"></option>
                            <option name="Divorced" label="Divorced" value="Divorced"></option>
                            <option name="Widow" label="Widow" value="Widow"></option>
                            <option name="Widower" label="Widower" value="Widower"></option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" id="email" placeholder="Enter Valid Email" value="<?php echo $row['email'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact Number</span>
                        <input type="text" placeholder="Enter Contact Number" name="contact" id="contact" value="<?php echo $row['contact'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Residential Address</span>
                        <input type="text" placeholder="Enter Residential Address" name="maddress" id="maddress" value="<?php echo $row['maddress'];?>"
                            required>
                    </div>
                    <div class="input-box">
                        <span class="details">G.P.S Address</span>
                        <input type="text" placeholder="Enter G.P.S Address" name="paddress" id="paddress" value="<?php echo $row['paddress'];?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Occupation</span>
                        <input type="text" placeholder="Enter Occupation" name="work" id="work" value="<?php echo $row['work'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Church Group</span>
                        <select name="chgroup" id="chgroup" value="<?php echo $row['chgroup'];?>">
                            <option value="<?php echo $row['chgroup'];?>"><?php echo $row['chgroup'];?></option>
                            <option name="Protocol" value="Protocol">Protocol</option>
                            <option name="Ushers" label="Ushers" value="Ushers"></option>
                            <option name="Prayer" label="Prayer" value="Prayer"></option>
                            <option name="Choir" label="Choir" value="Choir"></option>
                            <option name="Instrumentals" label="Instrumentals" value="Instrumentals"></option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Cell</span>
                        <select name="cell" id="cell" value="<?php echo $row['cell'];?>">
                            <option  value="<?php echo $row['cell'];?>"><?php echo $row['cell'];?></option>
                            <option name="overcomers" value="Overcomers">Overcomers</option>
                            <option name="opheavens" label="Open Heavens" value="Open Heavens"></option>
                            <option name="breakthrough" label="Breakthrough" value="Breakthrough"></option>
                            <option name="morningstar" label="Morning Star" value="Morning Star"></option>
                            <option name="breadlife" label="Bread of Life" value="Bread of Life"></option>
                            <option name="dunamis" label="Dunamis" value="Dunamis"></option>
                            <option name="wellspring" label="Wellspring" value="Wellspring"></option>
                            <option name="passion" label="Passion" value="Passion"></option>
                            <option name="holyhill" label="Holy Hill" value="Holy Hill"></option>
                            <option name="goodshepherd" label="Good Shepherd" value="Good Shepherd"></option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Member Since</span>
                        <input type="text" placeholder="Enter Date" name="since" id="since" value="<?php echo $row['since'];?>">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Update" name="edited" id="submit">
                </div>
                <?php } ?>
            </form>
        </div>

    </div>

    <?php 
                    if (isset($_POST['edited']))
                    {
                        $memberno = $_POST['memberno'];
                        $fullname = $_POST['fullname'];
                        $memdate = $_POST['memdate'];
                        $gender = $_POST['gender'];
                        $status = $_POST['status'];
                        $email = $_POST['email'];
                        $contact = $_POST['contact'];
                        $maddress = $_POST['maddress'];
                        $paddress = $_POST['paddress'];
                        $work = $_POST['work'];
                        $chgroup = $_POST['chgroup'];
                        $cell = $_POST['cell'];
                        $since = $_POST['since'];

                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `membership` SET memberno='$_POST[memberno]',fullname='$_POST[fullname]',memdate='$_POST[memdate]',gender='$_POST[gender]',status='$_POST[status]',email='$_POST[email]',contact='$_POST[contact]',maddress='$_POST[maddress]',maddress='$_POST[maddress]',paddress='$_POST[paddress]',work='$_POST[work]',chgroup='$_POST[chgroup]',cell='$_POST[cell]',since='$_POST[since]' WHERE memberno='$_POST[memberno]'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Details Updated";
                             header('location:membership.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:membership.php'); 
                         }
                    
                        echo "<script>window.location.href='membership.php'</script>";

                    }


                    ?>



</body>
<script src="membership.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>


</html>