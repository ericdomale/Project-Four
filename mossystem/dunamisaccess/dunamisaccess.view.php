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
    <title>Dunamis</title>
    <link rel="stylesheet" href="dunamisaccess.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../bicons/card-checklist.svg" alt="logo" class="logo">
       <h2 class="heading3">RECORD DETAILS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
               <li><a href="../shepherds/dataentry.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <!--<a href="#"><button  id="show-login" name="show-login">Add</button></a>
       <a href="#"><button  id="sho-login" name="sho-login">Attendance</button></a>-->
       
     </header>


     <a href="dunamisaccess.php"><button  id="show-login" name="show-login"><-- BACK</button></a>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>ATTENDANCE</th>
                    <th>NUMBER</th>
                    <th>PREACHER</th>
                    <th>MESSAGE</th>
                    <th>OFFERING</th>
                    <th>CONVERTS</th>
                    <th>CONVERTS NAMES</th>
                    <th>CHORISTERS</th>
                </tr>
            </thead>
            <tbody>
               <?php require '../cellentry/dunamis.record.view.php' ?>
            </tbody>
     </table>
        </div>
    </div>


      
    
</body>
<script src="dunamisaccess.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html> 