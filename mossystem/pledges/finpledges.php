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
    <title>Pledges</title>
    <link rel="stylesheet" href="pledges.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../icons/Business/medal-fill.svg" alt="logo" class="logo">
       <h2 class="heading">PLEDGES</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../finance/finance.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Pledge</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Add Record</div>
             <form action="finpledgeconnect.php" method="POST">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Pledger</span>
                         <input type="text" name="pledger" id="pledger" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="pdgdate" id="pdgdate" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Month</span>
                         <select name="pdgmonth" id="pdgmonth">
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
                         <span class="details">Program</span>
                         <select name="pdgprogram" id="pdgprogram">
                            <option>--Select One--</option>
                            <option name="Sunday Service" label="Sunday Service" value="Sunday Service">Sunday Service</option>
                            <option name="Anointing Service" label="Anointing Service" value="Anointing Service">Anointing Service</option>
                            <option name="Thanksgiving Service" label="Thanksgiving Service" value="Thanksgiving Service">Thanksgiving Service</option>
                            <option name="Special Service" label="Special Service" value="Special Service">Special Service</option>
                            <option name="Tuesday Service" label="Tuesday Service" value="Tuesday Service">Tuesday Service</option>
                            <option name="Friday Night Service" label="Friday Night Service" value="Friday Night Service">Friday Night Service</option>
                        </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Current Status</span>
                         <select name="pdgstatus" id="pdgstatus">
                           <option>--Select One--</option>
                           <option label="Paid" value="Paid"></option>
                           <option label="Unpaid" value="Unpaid"></option>
                       </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Amount</span>
                         <input type="text" name="pdgamount" id="pdgamount" required>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Submit" name="pdgsubmit" id="pdgsubmit">
                      </div>
             </form>
         </div>

     </div>
    
     <a href="finpledgeprint.php"><button id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>PLEDGER</th>
                    <th>DATE</th>
                    <th>MONTH</th>
                    <th>PROGRAM</th>
                    <th>STATUS</th>
                    <th>AMOUNT</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'finpledgedisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>


    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="pledges.js"></script>
</html>