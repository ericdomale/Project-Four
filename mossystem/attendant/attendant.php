<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="attendant.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
    <link rel="stylesheet" href="../jquery/font-awesome.css" media="all">
</head>
<body>

     <header>
       <img src="../bicons/calendar-check.svg" alt="logo" class="logo">
       <h2 class="heading">ATTENDANCE</h2>
       <nav>
           <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
               <li><a href="#" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Record</button></a>
       <form action="../login/logout.php" method="POST">
       <a href="#" class="cta"><button name="logout_btn">ATTENDANT</button></a>
       </form>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Enter Info.</div>
             <form action="connect.php" method="POST">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date"  name="atdate" id="atdate" placeholder="Enter Date..">
                     </div>
                     <div class="input-box">
                         <span class="details">Month</span>
                         <select name="atmonth" id="atmonth">
                           <option>--Select One--</option>
                           <option value="January">January</option>
                           <option label="February" value="February"></option>
                           <option label="March" value="March"></option>
                           <option label="April" value="April"></option>
                           <option label="May" value="May"></option>
                           <option label="June" value="June"></option>
                           <option label="July" value="July"></option>
                           <option label="August" value="August"></option>
                           <option label="September" value="September"></option>
                           <option label="October" value="October"></option>
                           <option label="November" value="November"></option>
                           <option label="December" value="December"></option>
                       </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Members</span>
                         <input type="text" name="memtotal" id="memtotal" placeholder="Enter Number" class="amount">
                     </div>
                     <div class="input-box">
                         <span class="details">Males</span>
                         <input type="text" name="males" id="males" placeholder="Enter Number">
                     </div>
                     <div class="input-box">
                         <span class="details">Females</span>
                         <input type="text" name="females" id="females" placeholder="Enter Number">
                     </div>
                     <div class="input-box">
                         <span class="details">Children</span>
                         <input type="text" name="childtotal" id="childtotal" placeholder="Enter Number" class="amount">
                     </div>
                     <div class="input-box">
                         <span class="details">Visitors</span>
                         <input type="text" name="vistotal" id="vistotal" placeholder="Enter Number" class="amount">
                     </div>
                     <div class="input-box">
                         <span class="details">Total</span>
                         <input type="text" name="overtotal" id="overtotal" placeholder="Enter Total">
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Record" name="atsubmit">
                      </div>
             </form>
         </div>
     </div>

     <a href="attendant.print.php"><button id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>MONTH</th>
                    <th>MEMBERS</th>
                    <th>MALES</th>
                    <th>FEMALES</th>
                    <th>CHILDREN</th>
                    <th>VISITORS</th>
                    <th>TOTAL</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'display.php' ?>
            </tbody>
     </table>
        </div>
    </div>   

    
     <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script> 
</body>
<script src="attendant.js"></script>
</html>