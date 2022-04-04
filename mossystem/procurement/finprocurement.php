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
    <title>Procurement</title>
    <link rel="stylesheet" href="procurement.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../bicons/cash-coin.svg" alt="logo" class="logo">
       <h2 class="heading">PROCUREMENT</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../finance/finance.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Record</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Add</div>
             <form action="finproconnect.php" method="POST">
             <div class="user-details">
                 <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="prodate" id="prodate" placeholder="Enter Date">
                     </div>
                     <div class="input-box">
                         <span class="details">Name</span>
                         <input type="text" name="proname" id="proname" placeholder="Enter Procurement Name">
                     </div>
                     <div class="input-box">
                         <span class="details">Quantity</span>
                         <input type="text" name="quantity" id="quantity" placeholder="Enter Quantity">
                     </div>
                     <div class="input-box">
                         <span class="details">Vendor</span>
                         <input type="text" name="vendor" id="vendor" placeholder="Enter Vendor Name">
                     </div>
                     <div class="input-box">
                         <span class="details">Vendor Contact</span>
                         <input type="text" name="ventact" id="ventact" placeholder="Enter Procurement Name">
                     </div>
                     <div class="input-box">
                         <span class="details">Purpose</span>
                         <input type="text" name="purpose" id="purpose" placeholder="Enter Purpose of Purchase">
                     </div>
                     <div class="input-box">
                         <span class="details">Amount</span>
                         <input type="text" name="proamount" id="proamount" placeholder="Enter Amount">
                     </div>
                     <div class="input-box">
                         <span class="details">Receiver</span>
                         <input type="text" name="receiver" id="receiver" placeholder="Enter Receiver Name">
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Record" name="procure">
                      </div>
             </form>
         </div>

     </div>

     <a href="finproprint.php"><button id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>NAME</th>
                    <th>QUANTITY</th>
                    <th>PURPOSE</th>
                    <th>VENDOR</th>
                    <th>RECEIVER</th>
                    <th>AMOUNT</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'finprocuredisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>
  

    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="procurement.js"></script>
</html>