<?php /*session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
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
       <img src="../icons/System/lock-password-fill.svg" alt="logo" class="logo">
       <h2 class="heading">ASSETS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../administration/admin.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Record</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Add</div>
             <form action="adassetconnect.php" method="POST">
                 <div class="user-details">
                 <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="assetdate" id="assetdate" placeholder="Enter Date">
                     </div>
                     <div class="input-box">
                         <span class="details">Asset Name</span>
                         <input type="text" name="assetname" id="assetname" placeholder="Enter Name">
                     </div>
                     <div class="input-box">
                         <span class="details">Amount</span>
                         <input type="text" name="assetamount" id="assetamount" placeholder="Enter Amount">
                     </div>
                     <div class="input-box">
                         <span class="details">Location</span>
                         <input type="text" name="assetlocation" id="assetlocation" placeholder="Enter Current Location">
                     </div>
                     <div class="input-box">
                         <span class="details">Specs</span>
                         <input type="text" name="assetspecs" id="assetspecs" placeholder="Enter Specs">
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Record" name="asset">
                      </div>
             </form>
         </div>

     </div>



     <a href="admassetprint.php"><button  id="show-login" name="show-login">Print</button></a>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>NAME</th>
                    <th>LOCATION</th>
                    <th>AMOUNT</th>
                    <th>SPECS</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'adassetdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>


    
     <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="assets.js"></script>
</html>