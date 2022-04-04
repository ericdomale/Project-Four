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
    <title>Prayers</title>
    <link rel="stylesheet" href="prayers.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../icons/Health/heart-pulse-line.svg" alt="logo" class="logo">
       <h2 class="heading">PRAYERS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../passistant/passistant.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Prayer</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Add Info</div>
             <form action="pasprayconnect.php" method="POST">

               <div class="user-details">
               <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" id="praydate" name="praydate" placeholder="Enter Date" required>
                     </div>
                    <div class="input-box">
                         <span class="details">Name of Person</span>
                         <input type="text" placeholder="Enter Full Name" name="prayname" id="prayname" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Kind of Prayer</span>
                         <select id="praykind" name="praykind" required>
                            <option>--Select One--</option>
                            <option name="Deliverance" value="Deliverance">Deliverance</option>
                            <option name="Dedication" label="Dedication" value="Dedication"></option>
                            <option name="Anniversary" label="Anniversary" value="Anniversary"></option>
                            <option name="Land Dedication" label="Land Dedication" value="Land Dedication"></option>
                            <option name="Building Projects" label="Building Projects" value="Building Projects"></option>
                            <option name="Others" label="Others" value="Others"></option>
                        </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Scheduled Date</span>
                         <input type="date" placeholder="Enter Scheduled Date" id="datescheduled" name="datescheduled" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Venue</span>
                         <input type="text" placeholder="Enter Prayer Venue" name="prayvenue" id="prayvenue" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Contact</span>
                         <input type="text" placeholder="Enter Contact of Person" name="praycontact" id="praycontact" required>
                     </div>
                </div>
                      <div class="button">
                          <input type="submit" value="Register" name="pray" id="submit">
                      </div>
             </form>
         </div>

     </div>

     <br><a href="pasprayprint.php"><button  id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>NAME</th>
                    <th>PRAYER</th>
                    <th>DATE SCHEDULED</th>
                    <th>VENUE</th>
                    <th>CONTACT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'paspraydisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>
    

     <script src="../jquery/datatables.js"></script>
     <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="prayers.js"></script>
</html>