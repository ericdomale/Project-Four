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
    <title>Baptisms</title>
    <link rel="stylesheet" href="baptisms.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../icons/Finance/water-flash-line.svg" alt="logo" class="logo">
       <h2 class="heading">BAPTISMS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../passistant/passistant.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Record</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Add Info</div>
             <form action="pasbaptconnect.php" method="POST">

               <div class="user-details">
                    <div class="input-box">
                         <span class="details">Name of Person</span>
                         <input type="text" placeholder="Enter Full Name" name="baptname" id="baptname" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Baptism Date</span>
                         <input type="date" id="baptdate" name="baptdate" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Baptizer</span>
                         <input type="text"  placeholder="Enter Name of Baptizer" id="baptizer" name="baptizer" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Venue</span>
                         <input type="text" placeholder="Enter Baptism Venue" name="baptvenue" id="baptvenue" required>
                     </div>
                </div>
                      <div class="button">
                          <input type="submit" value="Register" name="baptize" id="submit">
                      </div>
             </form>
         </div>

     </div>

     <br><a href="pasbaprint.php"><button  id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                <th>NAME</th>
                    <th>DATE</th>
                    <th>BAPTIZER</th>
                    <th>VENUE</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'pasbaptdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>

    
    <script src="../jquery/datatables.js"></script>
     <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="baptisms.js"></script>
</html>