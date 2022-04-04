<?php /*session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$ltid = $_GET['ltid'];

$query = "SELECT * FROM shplecturers WHERE ltid='$ltid'";
$update = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shepherd School</title>
    <link rel="stylesheet" href="shepherds.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>

<body>

    <header>
        <!--<img src="../bicons/coin.svg" alt="logo" class="logo">
        <h2 class="heading">SHEPHERD SCHOOL</h2>
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
                        <span class="details">Lecturer ID</span>
                        <input type="text" id="ltid" name="ltid" placeholder="Enter ID" value="<?php echo $row['ltid'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" value="<?php echo $row['fullname'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date Appointed</span>
                        <input type="date" name="appdate" id="appdate" value="<?php echo $row['appdate'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Department</span>
                        <select name="school" id="school" value="<?php echo $row['school'];?>">
                            <option value="<?php echo $row['school'];?>"><?php echo $row['school'];?></option>
                            <option name="marriage" value="School of Marriage">School of Marriage</option>
                            <option name="shepherds" label="Shepherds School" value="Shepherds School"></option>
                            <option name="bible" label="Bible School" value="Bible School"></option>
                            <option name="ministry" label="Ministry/Discipleship" value="Ministry/Discipleship">
                            </option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Qualification</span>
                        <input type="text" name="qualify" id="qualify" required placeholder="Enter Qualifications" value="<?php echo $row['qualify'];?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Trainings Attended</span>
                        <input type="text" name="trainings" id="trainings" required
                            placeholder="Enter Trainings Attended" value="<?php echo $row['trainings'];?>">
                    </div>
                    <div class="input-box">
                        <span class="details">Status</span>
                        <select name="lectstatus" id="lectstatus" value="<?php echo $row['lectstatus'];?>">
                            <option value="<?php echo $row['lectstatus'];?>"><?php echo $row['lectstatus'];?></option>
                            <option name="partime" value="Part-Time">Part-Time</option>
                            <option name="fulltime" label="Full-Time" value="Full-Time"></option>
                            <option name="visiting" label="Visiting" value="Visiting"></option>
                            <option name="volunteer" label="Volunteer" value="Volunteer"></option>
                        </select>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="edited" id="lecturer">
                </div>
            <?php }?>
            </form>
        </div>

    </div>


    <?php 
                    if (isset($_POST['edited']))
                    {
                        $ltid = $_POST['ltid'];
                        $fullname = $_POST['fullname'];
                        $appdate = $_POST['appdate'];
                        $school = $_POST['school'];
                        $qualify = $_POST['qualify'];
                        $trainings = $_POST['trainings'];
                        $lectstatus = $_POST['lectstatus'];

                        

                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `shplecturers` SET ltid='$_POST[ltid]',fullname='$_POST[fullname]',appdate='$_POST[appdate]',school='$_POST[school]',qualify='$_POST[qualify]',trainings='$_POST[trainings]',lectstatus='$_POST[lectstatus]' WHERE ltid='$_POST[ltid]'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Details Updated";
                             header('location:shepherds.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:shepherds.php'); 
                         }
                    
                        echo "<script>window.location.href='shepherds.php'</script>";

                    }


                    ?>



  

            <script src="../jquery/datatables.js"></script>
            <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="shepherds.js"></script>


</html>