<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$aid = $_GET['aid'];

$query = "SELECT * FROM assets WHERE aid='$aid'";
$update = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assets</title>
    <link rel="stylesheet" href="assets.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <!--<img src="../icons/System/lock-password-fill.svg" alt="logo" class="logo">
       <h2 class="heading">ASSETS</h2>
       <nav>
           <ul class="nav_links">
               <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Record</button></a>-->
       
     </header>


     <div class="pup">
         

         <div class="container">
             <div class="title">Add</div>
             <form action="" method="POST">
             <?php while ($row = mysqli_fetch_array($update)) { ?>
                 <div class="user-details">
                 <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="assetdate" id="assetdate" value="<?php echo $row['assetdate'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Asset Name</span>
                         <input type="text" name="assetname" id="assetname" value="<?php echo $row['assetname'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Amount</span>
                         <input type="text" name="assetamount" id="assetamount" value="<?php echo $row['assetamount'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Location</span>
                         <input type="text" name="assetlocation" id="assetlocation" value="<?php echo $row['assetlocation'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Specs</span>
                         <input type="text" name="assetspecs" id="assetspecs" value="<?php echo $row['assetspecs'];?>">
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Record" name="edited">
                      </div>
                      <?php } ?>
             </form>
         </div>

     </div>

     <?php 
                    if (isset($_POST['edited']))
                    {
                        $assetdate = $_POST['assetdate'];
                        $assetname = $_POST['assetname'];
                        $assetamount = $_POST['assetamount'];
                        $assetlocation = $_POST['assetlocation'];
                        $assetspecs = $_POST['assetspecs'];
                    

                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `assets` SET assetdate='$_POST[assetdate]',assetname='$_POST[assetname]',assetamount='$_POST[assetamount]',assetlocation='$_POST[assetlocation]',assetspecs='$_POST[assetspecs]' WHERE aid='$aid'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Details Updated";
                             header('location:assets.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:assets.php'); 
                         }
                    
                        echo "<script>window.location.href='assets.php'</script>";

                    }


                    ?>

    

    
     <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="assets.js"></script>
</html>