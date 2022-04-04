<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$childno = $_GET['childno'];

$query = "SELECT * FROM childlist WHERE childno='$childno'";
$update = mysqli_query($conn,$query);

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Childlist</title>
    <link rel="stylesheet" href="childlist.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">

</head>

<body>

    <header>
       <!-- <img src="../icons/User/contacts-fill.svg" alt="logo" class="logo">
        <h2 class="heading">LIST</h2>
        <nav>
            <ul class="nav_links">
                <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
                <li><a href="../children/children.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">Add Child</button></a>-->

    </header>


    <div class="pup">

        <div class="container">
            <div class="title">Add</div>
            <form action="" method="POST">
            <?php while ($row = mysqli_fetch_array($update)) { ?>

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Child ID</span>
                        <input type="text" id="childno" name="childno" value="<?php echo $row['childno'];?>" readonly>
                    </div>
                        <div class="input-box">
                            <span class="details">Name</span>
                            <input type="text" name="childname" id="childname" placeholder="Enter Name of Child"  value="<?php echo $row['childname'];?>">
                        </div>
                        <div class="input-box">
                            <span class="details">D.O.B</span>
                            <input type="date" name="childbirth" id="childbirth" placeholder="Enter Date of Birth"  value="<?php echo $row['childbirth'];?>">
                        </div>
                        <div class="input-box">
                            <span class="details">Age Group</span>
                            <select name="agegroup" id="agegroup"  value="<?php echo $row['agegroup'];?>" required>
                                <option  value="<?php echo $row['agegroup'];?>"><?php echo $row['agegroup'];?></option>
                                <option value="0-2yrs" name="baby">0-2yrs</option>
                                <option label="3-5yrs" value="3-5yrs" name="infant"></option>
                                <option label="6-9yrs" value="6-9yrs" name="child"></option>
                                <option label="10-12yrs" value="10-12yrs" name="adolescent"></option>
                                <option label="13-19yrs" value="13-19yrs" name="teen"></option>
                                <option label="20-above" value="20-above" name="adult"></option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Gender</span>
                            <select name="gender" id="gender" class="gender"  value="<?php echo $row['gender'];?>" required>
                                <option  value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?></option>
                                <option value="Male" name="male">Male</option>
                                <option label="Female" value="Female" name="female"></option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Father's Name</span>
                            <input type="text" name="childfather" id="childfather" placeholder="Enter Father's Name"  value="<?php echo $row['childfather'];?>">
                        </div>
                        <div class="input-box">
                            <span class="details">Mother's Name</span>
                            <input type="text" name="childmother" id="childmother" placeholder="Enter Mother's Name"  value="<?php echo $row['childmother'];?>">
                        </div>
                        <div class="input-box">
                            <span class="details">Residential Address</span>
                            <input type="text" name="childaddress" id="childaddress" placeholder="Enter Child Address"  value="<?php echo $row['childaddress'];?>">
                        </div>
                        <div class="input-box">
                            <span class="details">School</span>
                            <input type="text" name="childschool" id="childschool" placeholder="Enter School of Child"  value="<?php echo $row['childschool'];?>">
                        </div>
                        <div class="input-box">
                            <span class="details">Class</span>
                            <input type="text" name="childclass" id="childclass" placeholder="Enter Class of Child"  value="<?php echo $row['childclass'];?>">
                        </div>
                        <div class="input-box">
                            <span class="details">Teacher</span>
                            <input type="text" name="childteacher" id="childteacher"
                                placeholder="Enter Name of Teacher"  value="<?php echo $row['childteacher'];?>">
                        </div>
                     </div>
                    <div class="button">
                        <input type="submit" value="Update" name="edited">
                    </div>
                    <?php } ?>  
            </form>
        </div>

    </div>


    <?php 
                    if (isset($_POST['edited']))
                    {
                        $childno = $_POST['childno'];
                        $childname = $_POST['childname'];
                        $childbirth = $_POST['childbirth'];
                        $agegroup = $_POST['agegroup'];
                        $gender = $_POST['gender'];
                        $childfather= $_POST['childfather'];
                        $childmother = $_POST['childmother'];
                        $childaddress = $_POST['childaddress'];
                        $childschool = $_POST['childschool'];
                        $childclass = $_POST['childclass'];
                        $childteacher = $_POST['childteacher'];
                      

                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `childlist` SET childno='$_POST[childno]',childname='$_POST[childname]',childbirth='$_POST[childbirth]',agegroup='$_POST[agegroup]',gender='$_POST[gender]',childfather='$_POST[childfather]',childmother='$_POST[childmother]',childaddress='$_POST[childaddress]',childschool='$_POST[childschool]',childclass='$_POST[childclass]',childteacher='$_POST[childteacher]' WHERE childno='$_POST[childno]'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Details Updated";
                             header('location:adchildlist.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:adchildlist.php'); 
                         }
                    
                        echo "<script>window.location.href='adchildlist.php'</script>";

                    }


                    ?>

    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="childlist.js"></script>

</html>