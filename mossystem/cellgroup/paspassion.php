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
    <title>Passion</title>
    <link rel="stylesheet" href="passion.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../bicons/journal-richtext.svg" alt="logo" class="logo">
       <h2 class="heading">PASSION</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../shepherds/pascells.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">+</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Enter Info</div>
             <form action="sheplistconnect.php" method="POST">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Shepherd ID</span>
                         <input type="text" id="shpid" name="shpid" placeholder="Enter ID of Person">
                     </div>
                     <div class="input-box">
                         <span class="details">Full Name</span>
                         <input type="text" id="fullname" name="fullname" placeholder="Enter Name">
                     </div>
                     <div class="input-box">
                         <span class="details">Date Appointed</span>
                         <input type="date" name="appdate" id="appdate">
                     </div>
                     <div class="input-box">
                         <span class="details">Position</span>
                         <select name="position" id="position">
                                 <option>--Select One--</option>
                                 <option name="leader"  value="Leader">Leader</option>
                                 <option name="assistant" label="Assistant" value="Assistant"></option>
                                 <option name="others" label="Others" value="Others"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Cell</span>
                         <select name="cell" id="cell">
                                 <option>--Select One--</option>
                                 <option name="overcomers"  value="Overcomers">Overcomers</option>
                                 <option name="opheavens" label="Open Heavens" value="Open Heavens"></option>
                                 <option name="breakthrough" label="Breakthrough" value="Breakthrough"></option>
                                 <option name="morningstar" label="Morning Star" value="Morning Star"></option>
                                 <option name="breadlife" label="Bread of Life" value="Bread of Life"></option>
                                 <option name="dunamis" label="Dunamis" value="Dunamis"></option>
                                 <option name="wellspring" label="Wellspring" value="Wellspring"></option>
                                 <option name="passion" label="Passion" value="Passion"></option>
                                 <option name="holyhill" label="Holy Hill" value="Holy Hill"></option>
                                 <option name="goodshepherd" label="Good Shepherd" value="Good Shepherd"></option>
                         </select>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Shepherd" name="shepadd">
                      </div>
             </form>
         </div>

     </div>


     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>MEMBER ID</th>
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>CONTACT</th>
                </tr>
            </thead>
            <tbody>
               <?php require '../cellconnection/passiondisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>


      
    
</body>
<script src="overcomers.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html> 