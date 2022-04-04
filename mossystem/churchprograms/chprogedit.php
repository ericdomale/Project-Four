<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$chprogid = $_GET['chprogid'];

$query = "SELECT * FROM chprograms WHERE chprogid='$chprogid'";
$update = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Programs</title>
    <link rel="stylesheet" href="program.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
        <!--<img src="../bicons/calendar2-week.svg" alt="logo" class="logo">
       <h2 class="heading">CHURCH PROGRAMS</h2>
       <nav>
           <ul class="nav_links">
              <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Program</button></a>-->
       
     </header>


     <div class="pup">
         

         <div class="container">
             <div class="title">Enter Info</div>
             <form action="" method="POST">
             <?php while ($row = mysqli_fetch_array($update)) { ?>
                 <div class="user-details">
                 <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="chprogdate" id="chprogdate" value="<?php echo $row['chprogdate'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Program</span>
                         <select name="chprogname" id="chprogname" value="<?php echo $row['chprogname'];?>">
                                 <option value="<?php echo $row['chprogname'];?>"><?php echo $row['chprogname'];?></option>
                                 <option name="conferences"  value="Conferences">Conferences</option>
                                 <option name="shepcamp" label="Shepherds Camp" value="Shepherds Camp"></option>
                                 <option name="workcamp" label="Church Workers Camp" value="Church Workers Camp"></option>
                                 <option name="easter" label="Easter" value="Easter"></option>
                                 <option name="christmas" label="Christmas Service" value="Christmas Service"></option>
                                 <option name="decnight" label="31st Dec" value="31st Dec"></option>
                                 <option name="pastconf" label="Pastors Conference" value="Pastors Conference"></option>
                                 <option name="thanksgiving" label="Thanksgiving Service" value="Thanksgiving Service"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Total Revenue</span>
                         <input type="text" name="chprogrevenue" id="chprogrevenue" value="<?php echo $row['chprogrevenue'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Expenditure</span>
                         <input type="text" name="chprogexpend" id="chprogexpend" value="<?php echo $row['chprogexpend'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Surplus/Deficit</span>
                         <input type="text" name="supdef" id="supdef" value="<?php echo $row['supdef'];?>">
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Program" name="edited">
                      </div>
                      <?php } ?>
             </form>
         </div>
     </div>

     <?php 
                    if (isset($_POST['edited']))
                    {
                        $chprogdate = $_POST['chprogdate'];
                        $chprogname = $_POST['chprogname'];
                        $chprogrevenue = $_POST['chprogrevenue'];
                        $chprogexpend = $_POST['chprogexpend'];
                        $supdef = $_POST['supdef'];
                    

                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `chprograms` SET chprogdate='$_POST[chprogdate]',chprogname='$_POST[chprogname]',chprogrevenue='$_POST[chprogrevenue]',chprogexpend='$_POST[chprogexpend]',supdef='$_POST[supdef]' WHERE chprogid='$chprogid'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Details Updated";
                             header('location:program.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:program.php'); 
                         }
                    
                        echo "<script>window.location.href='program.php'</script>";

                    }


                    ?>

    


     <script src="../jquery/datatables.js"></script>
     <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="program.js"></script>
</html>