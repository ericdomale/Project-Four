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
    <title>Visitors</title>
    <link rel="stylesheet" href="visitors.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
    
</head>
<body>

     <header>
       <img src="../bicons/person-plus.svg" alt="logo" class="logo">
       <h2 class="heading">VISITORS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../passistant/passistant.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Visitor</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Add</div>
             <form action="pasvisconnect.php" method="POST">
                 <div class="user-details">
                 <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="visdate" id="visdate" placeholder="Enter Date">
                     </div>
                     <div class="input-box">
                         <span class="details">Name</span>
                         <input type="text" name="visname" id="visname" placeholder="Enter Visitor Name">
                     </div>
                     <div class="input-box">
                         <span class="details">Service</span>
                         <select name="service" id="service" required>
                                 <option>--Select One--</option>
                                 <option name="midweek"  value="Mid-Week Communion">Mid-Week Communion</option>
                                 <option name="healing" label="Friday Healing Service" value="Friday Healing Service"></option>
                                 <option name="thanksgiving" label="Thanksgiving Service" value="Thanksgiving Service"></option>
                                 <option name="ftservice" label="Sunday First Service" value="Sunday First Service"></option>
                                 <option name="sdservice" label="Sunday Second Service" value="Sunday Second Service"></option>
                                 <option name="allnight" label="Allnight Service" value="Allnight Service"></option>
                                 <option name="conferences" label="Conferences" value="Conferences"></option>
                                 <option name="deliverance" label="Healing/Deliverance Service" value="Healing/Deliverance Service"></option>
                         </select>
                     </div>
                         <div class="input-box">
                         <span class="details">Status</span>
                         <select name="vstatus" id="vstatus" required>
                                 <option>--Select One--</option>
                                 <option name="ftimer"  value="First Timer">First Timer</option>
                                 <option name="sdtimer" label="Second Timer" value="Second Timer"></option>
                                 <option name="justvisit" label="Just For A Visit" value="Just For A Visit"></option>
                                 <option name="bmember" label="Become A Member" value="Become A Member"></option>
                         </select>
                        </div>
                         <div class="input-box">
                         <span class="details">Church Info</span>
                         <select name="chinfo" id="chinfo" required>
                                 <option>--How did you here about us--</option>
                                 <option name="mfinvite"  value="Member/Friend Invitation">Member/Friend Invitation</option>
                                 <option name="recommend" label="Recommendation" value="Recommendation"></option>
                                 <option name="socialmedia" label="Social Media" value="Social Media"></option>
                                 <option name="evangelism" label="Evangelism" value="Evangelism"></option>
                                 <option name="others" label="Others" value="Others"></option>
                         </select>
                      </div>
                    </div>
                      <div class="button">
                          <input type="submit" value="Add Visit Info" name="visit">
                      </div>
             </form>
         </div>
     </div>




     <a href="pasvisitorprint.php"><button  id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>NAME</th>
                    <th>SERVICE</th>
                    <th>STATUS</th>
                    <th>INFO</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'pasvisitordisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>




    
    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script> 
</body>

<script src="visitors.js"></script>
</html>