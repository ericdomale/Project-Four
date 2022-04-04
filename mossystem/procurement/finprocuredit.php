<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$proid = $_GET['proid'];

$query = "SELECT * FROM procurement WHERE proid='$proid'";
$update = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurement</title>
    <link rel="stylesheet" href="procurement.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
    
</head>
<body>

     <header>
       <!--<img src="../bicons/cash-coin.svg" alt="logo" class="logo">
       <h2 class="heading">EDIT DETAILS</h2>
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
             <div class="title">Edit Details</div>
             <form action="" method="POST">
             <?php while ($row = mysqli_fetch_array($update)) { ?>

                 <div class="user-details">
                 <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="prodate" id="prodate" value="<?php echo $row['prodate'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Name</span>
                         <input type="text" name="proname" id="proname" value="<?php echo $row['proname'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Quantity</span>
                         <input type="text" name="quantity" id="quantity" value="<?php echo $row['quantity'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Vendor</span>
                         <input type="text" name="vendor" id="vendor" value="<?php echo $row['vendor'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Vendor Contact</span>
                         <input type="text" name="ventact" id="ventact" value="<?php echo $row['ventact'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Purpose</span>
                         <input type="text" name="purpose" id="purpose" value="<?php echo $row['purpose'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Amount</span>
                         <input type="text" name="proamount" id="proamount" value="<?php echo $row['proamount'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Receiver</span>
                         <input type="text" name="receiver" id="receiver" value="<?php echo $row['receiver'];?>">
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
                        $prodate = $_POST['prodate'];
                        $proname = $_POST['proname'];
                        $quantity = $_POST['quantity'];
                        $vendor = $_POST['vendor'];
                        $ventact = $_POST['ventact'];
                        $purpose = $_POST['purpose'];
                        $proamount = $_POST['proamount'];
                        $receiver = $_POST['receiver'];

                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `procurement` SET prodate='$_POST[prodate]',proname='$_POST[proname]',quantity='$_POST[quantity]',vendor='$_POST[vendor]',purpose='$_POST[purpose]',proamount='$_POST[proamount]',receiver='$_POST[receiver]' WHERE proid='$proid'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Details Updated";
                             header('location:finprocurement.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:finprocurement.php'); 
                         }
                    
                        echo "<script>window.location.href='adprocurement.php'</script>";

                    }


                    ?>

    
    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script> 
</body>
<script src="procurement.js"></script>
</html>