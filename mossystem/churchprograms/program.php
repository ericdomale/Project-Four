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
    <title>Church Programs</title>
    <link rel="stylesheet" href="program.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../bicons/calendar2-week.svg" alt="logo" class="logo">
       <h2 class="heading">CHURCH PROGRAMS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Program</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Enter Info</div>
             <form action="progconnect.php" method="POST">
                 <div class="user-details">
                 <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="chprogdate" id="chprogdate" placeholder="Enter Date">
                     </div>
                     <div class="input-box">
                         <span class="details">Program</span>
                         <select name="chprogname" id="chprogname">
                                 <option>--Select One--</option>
                                 <option name="conferences"  value="Conferences">Conferences</option>
                                 <option name="shepcamp" label="Shepherds Camp" value="Shepherds Camp"></option>
                                 <option name="workcamp" label="Church Workers Camp" value="Church Workers Camp"></option>
                                 <option name="easter" label="Easter" value="Easter"></option>
                                 <option name="christmas" label="Christmas Service" value="Christmas Service"></option>
                                 <option name="decnight" label="31st Dec" value="31st Dec"></option>
                                 <option name="pastconf" label="Pastors Conference" value="Pastors Conference"></option>
                                 <option name="thanksgiving" label="Thanksgiving Service" value="Thanksgiving Service"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Total Revenue</span>
                         <input type="text" name="chprogrevenue" id="chprogrevenue" placeholder="Enter Amount">
                     </div>
                     <div class="input-box">
                         <span class="details">Expenditure</span>
                         <input type="text" name="chprogexpend" id="chprogexpend" placeholder="Enter Amount">
                     </div>
                     <div class="input-box">
                         <span class="details">Surplus/Deficit</span>
                         <input type="text" name="supdef" id="supdef" placeholder="Enter Amount">
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Program" name="addprogram">
                      </div>
             </form>
         </div>
     </div>


     <br><a href="printprogram.php"><button  id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>PROGRAM</th>
                    <th>REVENUE</th>
                    <th>EXPENDITURE</th>
                    <th>SURPLUS/DEFICIT</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'chprogramdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>


     <script src="../jquery/datatables.js"></script>
     <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="program.js"></script>
</html>