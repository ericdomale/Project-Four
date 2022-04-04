<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$offid = $_GET['offid'];

$query = "SELECT * FROM offerings WHERE offid='$offid'";
$update = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offerings</title>
    <link rel="stylesheet" href="offerings.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <!--<img src="../icons/Finance/hand-coin-line.svg" alt="logo" class="logo">
       <h2 class="heading">OFFERINGS</h2>
       <nav>
           <ul class="nav_links">
               <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Offering</button></a>-->
       
     </header>


     <div class="pup">
         

         <div class="container">
             <div class="title">Add Record</div>
             <form action="" method="POST">
             <?php while ($row = mysqli_fetch_array($update)) { ?>
                 <div class="user-details">
                 <div class="input-box">
                         <span class="details">Month</span>
                         <select name="offmonth" id="offmonth" value="<?php echo $row['offmonth'];?>">
                           <option value="<?php echo $row['offmonth'];?>"><?php echo $row['offmonth'];?></option>
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
                         <span class="details">Week</span>
                         <input type="week" name="offweek" id="offweek" value="<?php echo $row['offweek'];?>" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="offdate" id="offdate" value="<?php echo $row['offdate'];?>" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Program</span>
                         <select name="offprogram" id="offprogram" value="<?php echo $row['offprogram'];?>">
                            <option value="<?php echo $row['offprogram'];?>"><?php echo $row['offprogram'];?></option>
                            <option name="Empowerment Service" label="Empowerment Service" value="Empowerment Service">Empowerment Service</option>
                            <option name="Armour Service" label="Armour Service" value="Armour Service">Armour Service</option>
                            <option name="Missiles Service" label="Missiles Service" value="Missiles Service">Missiles Service</option>
                        </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Type</span>
                         <select name="offertype" id="offertype" value="<?php echo $row['offertype'];?>">
                            <option value="<?php echo $row['offertype'];?>"><?php echo $row['offertype'];?></option>
                            <option name="Sunday Offering" value="Sunday Offering">Sunday Offering</option>
                            <option name="Seed Offering" label="Seed Offering" value="Seed Offering">Seed Offering</option>
                            <option name="Thanksgiving" label="Thanksgiving" value="Thanksgiving">Thanksgiving</option>
                            <option name="Special Offering" label="Special Offering" value="Special Offering">Special Offering</option>
                            <option name="First Fruit" label="First Fruit" value="First Fruit">First Fruit</option>
                            <option name="Sacrifice Offering" label="Sacrifice Offering" value="Sacrifice Offering">Sacrifice Offering</option>
                            <option name="Tuesday Offering" value="Tuesday Offering">Tuesday Offering</option>
                            <option name="Friday Night Offering" value="Friday Night Offering">Friday Night Offering</option>
                        </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Amount</span>
                         <input type="text" name="ofamount" id="ofamount" value="<?php echo $row['ofamount'];?>" required>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Submit" name="edited" id="submit">
                      </div>
                      <?php } ?>
             </form>
         </div>

     </div>

     <?php 
                    if (isset($_POST['edited']))
                    {
                        $offmonth = $_POST['offmonth'];
                        $offweek = $_POST['offweek'];
                        $offdate = $_POST['offdate'];
                        $offprogram = $_POST['offprogram'];
                        $offertype = $_POST['offertype'];
                        $ofamount = $_POST['ofamount'];
                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `offerings` SET offmonth='$_POST[offmonth]',offweek='$_POST[offweek]',offdate='$_POST[offdate]',offprogram='$_POST[offprogram]',offertype='$_POST[offertype]',ofamount='$_POST[ofamount]' WHERE offid='$offid'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Details Updated";
                             header('location:offerings.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:offerings.php'); 
                         }
                    
                        echo "<script>window.location.href='offerings.php'</script>";

                    }


                    ?>
    

    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="offerings.js"></script>
</html>