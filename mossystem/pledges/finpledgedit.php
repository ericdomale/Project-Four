<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$pdgid = $_GET['pdgid'];

$query = "SELECT * FROM pledges WHERE pdgid='$pdgid'";
$update = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pledges</title>
    <link rel="stylesheet" href="pledges.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <!--<img src="../icons/Business/medal-fill.svg" alt="logo" class="logo">
       <h2 class="heading">PLEDGES</h2>
       <nav>
           <ul class="nav_links">
               <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Pledge</button></a>-->
       
     </header>


     <div class="pup">
         

         <div class="container">
             <div class="title">Add Record</div>
             <form action="" method="POST">
             <?php while ($row = mysqli_fetch_array($update)) { ?>
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Pledger</span>
                         <input type="text" name="pledger" id="pledger" value="<?php echo $row['pledger'];?>" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="pdgdate" id="pdgdate" value="<?php echo $row['pdgdate'];?>" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Month</span>
                         <select name="pdgmonth" id="pdgmonth" value="<?php echo $row['pdgmonth'];?>">
                           <option value="<?php echo $row['pdgmonth'];?>"><?php echo $row['pdgmonth'];?></option>
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
                         <select name="pdgprogram" id="pdgprogram" value="<?php echo $row['pdgprogram'];?>">
                            <option value="<?php echo $row['pdgprogram'];?>"><?php echo $row['pdgprogram'];?></option>
                            <option name="Sunday Service" label="Sunday Service" value="Sunday Service">Sunday Service</option>
                            <option name="Anointing Service" label="Anointing Service" value="Anointing Service">Anointing Service</option>
                            <option name="Thanksgiving Service" label="Thanksgiving Service" value="Thanksgiving Service">Thanksgiving Service</option>
                            <option name="Special Service" label="Special Service" value="Special Service">Special Service</option>
                            <option name="Tuesday Service" label="Tuesday Service" value="Tuesday Service">Tuesday Service</option>
                            <option name="Friday Night Service" label="Friday Night Service" value="Friday Night Service">Friday Night Service</option>
                        </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Current Status</span>
                         <select name="pdgstatus" id="pdgstatus" value="<?php echo $row['pdgstatus'];?>">
                           <option value="<?php echo $row['pdgstatus'];?>"><?php echo $row['pdgstatus'];?></option>
                           <option label="Paid" value="Paid"></option>
                           <option label="Unpaid" value="Unpaid"></option>
                       </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Amount</span>
                         <input type="text" name="pdgamount" id="pdgamount" value="<?php echo $row['pdgamount'];?>" required>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Submit" name="edited" id="pdgsubmit">
                      </div>
                      <?php } ?>
             </form>
         </div>

     </div>
    

    <?php 
                    if (isset($_POST['edited']))
                    {
                        $pledger = $_POST['pledger'];
                        $pdgdate = $_POST['pdgdate'];
                        $pdgmonth = $_POST['pdgmonth'];
                        $pdgprogram = $_POST['pdgprogram'];
                        $pdgstatus = $_POST['pdgstatus'];
                        $pdgamount = $_POST['pdgamount'];

                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `pledges` SET pledger='$_POST[pledger]',pdgdate='$_POST[pdgdate]',pdgmonth='$_POST[pdgmonth]',pdgprogram='$_POST[pdgprogram]',pdgstatus='$_POST[pdgstatus]',pdgamount='$_POST[pdgamount]' WHERE pdgid='$pdgid'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Details Updated";
                             header('location:finpledges.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:finpledges.php'); 
                         }
                    
                        echo "<script>window.location.href='finpledges.php'</script>";

                    }


                    ?>

    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="pledges.js"></script>
</html>