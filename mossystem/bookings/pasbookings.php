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
    <title>Bookings</title>
    <link rel="stylesheet" href="bookings.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../bicons/book.svg" alt="logo" class="logo">
       <h2 class="heading">BOOKINGS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../passistant/passistant.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Booking</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Enter Info</div>
             <form action="connectpasbooking.php" method="POST">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Program</span>
                         <input type="text" placeholder="Enter Program Name" name="bkgprogram" id="bkgprogram" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date"  name="bkgdate" id="bkgdate" placeholder="Enter Date" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Time</span>
                         <input type="text" placeholder="Enter Reporting Time " name="bkgtime" id="bkgtime" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Venue</span>
                         <input type="text" placeholder="Enter Venue" name="bkgvenue" id="bkgvenue" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Email</span>
                         <input type="email" name="bkgemail" id="bkgemail" placeholder="Enter Valid Email">
                     </div>
                     <div class="input-box">
                         <span class="details">R.S.V.P</span>
                         <input type="text" placeholder="Enter Name" name="rsvp" id="rsvp" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Contact</span>
                         <input type="text" placeholder="Enter Contact Number" name="bkgcontact" id="bkgcontact">
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Booking" name="booking" id="booking">
                      </div>
             </form>
         </div>

     </div>

     <br><a href="pasprintbookings.php"><button  id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>PROGRAM</th>
                    <th>VENUE</th>
                    <th>TIME</th>
                    <th>EMAIL</th>
                    <th>RSVP</th>
                    <th>CONTACT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'pasbookingsdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>

    
</body>
<script src="bookings.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html>