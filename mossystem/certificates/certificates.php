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
    <title>Certificates</title>
    <link rel="stylesheet" href="certificates.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../bicons/award.svg" alt="logo" class="logo">
       <h2 class="heading">CERTIFICATES</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Certificate</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         
         <div class="container">
             <div class="title">Add Info</div>
             <form action="certconnect.php" method="POST">
             
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Entry Date</span>
                         <input type="date" id="certdate" name="certdate" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Full Name</span>
                         <input type="text" placeholder="Enter Full Name" name="certname" id="certname" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Type</span>
                         <select name="certype" id="certype" class="certype" required>
                                <option>--Type of Certificate--</option>
                                 <option value="Baptism" name="baptism">Baptism</option>
                                 <option value="Membership" name="membership" label="Membership"></option>
                                 <option value="Baby Dedication" name="babydedication" label="Baby Dedication"></option>
                                 <option value="Pastoral" name="pastoral" label="Pastoral"></option>
                                 <option value="Leadership (ADLT)" name="leadership" label="Leadership (ADLT)"></option>
                                 <option value="Marriage" name="marriage" label="Marriage"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Award Date</span>
                         <input type="date" id="awdate" name="awdate" required>
                     </div>
                     <div class="input-box">
                         <span class="details">School</span>
                         <select name="certschool" id="certschool">
                                 <option>--Select School--</option>
                                 <option name="marriage"  value="School of Marriage">School of Marriage</option>
                                 <option name="shepherds" label="Shepherds School" value="Shepherds School"></option>
                                 <option name="bible" label="Bible School" value="Bible School"></option>
                                 <option name="ministry" label="Ministry/Discipleship" value="Ministry/Discipleship"></option>
                                 <option name="others" label="Others" value="Others"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Program Duration</span>
                         <input type="text" placeholder="Enter Duration" name="certduration" id="certduration" required>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Register" name="certificate" id="submit">
                      </div>
             </form>
         </div>

     </div>

     <br><a href="certiprint.php"><button  id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>NAME</th>
                    <th>TYPE</th>
                    <th>DATE AWARDED</th>
                    <th>SCHOOL</th>
                    <th>DURATION</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'certdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>



     <script src="../jquery/datatables.js"></script>
     <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="certificate.js"></script>
</html>