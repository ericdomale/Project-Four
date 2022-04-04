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
    <title>Staff</title>
    <link rel="stylesheet" href="staff.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
    <link rel="stylesheet" href="../jquery/font-awesome.css" media="all">
</head>
<body>

     <header>
       <img src="../icons/User/team-line.svg" alt="logo" class="logo">
       <h2 class="heading">STAFF</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../administration/admin.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Staff</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">New Staff</div><br>
             <form action="adstaffconnect.php" method="POST">

                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Member ID</span>
                         <input type="text" id="staffid" name="staffid" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Full Name</span>
                         <input type="text" placeholder="Enter Full Name" name="staffname" id="staffname" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Department</span>
                         <select name="department" id="department">
                                 <option>--Select One--</option>
                                 <option name="Admin"  value="Admin">Admin</option>
                                 <option name="Finance" label="Finance" value="Finance"></option>
                                 <option name="Event" label="Event" value="Event"></option>
                         </select>
                     </div>
                     
                 </div>
                      <div class="button">
                          <input type="submit" value="Add to Staff" name="addstaff">
                      </div>
             </form>
         </div>

        </div>

        <a href="adstaffprint.php"><button id="show-login" name="show-login">Print</button></a><br>
        <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>STAFF ID</th>
                    <th>NAME</th>
                    <th>DEPARTMENT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'adstaffdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>   

    
</body>
<script src="staff.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html>