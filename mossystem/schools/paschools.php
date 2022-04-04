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
    <title>Schools</title>
    <link rel="stylesheet" href="schools.css">
</head>
<body>

     <header>
       <img src="../icons/Buildings/community-line.svg" alt="logo" class="logo">
       <h2 class="heading">SCHOOLS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../passistant/passistant.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <!--<a href="#"><button  id="show-login" name="show-login">Enrol Student</button></a>-->
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <!--<div class="container">
             <div class="title">Enter Info</div>
             <form action="" method="">
                 <div class="user-details">
                     <div class="input-box" hidden>
                         <span class="details">Enrol ID</span>
                         <input type="text" id="erlid" name="erlid">
                     </div>
                     <div class="input-box">
                         <span class="details">Student Name</span>
                         <select name="fullname" id="fullname">
                                 <option>--Select One--</option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Enrol Date</span>
                         <input type="date" placeholder="Enter Date of Enrollment">
                     </div>
                     <div class="input-box">
                         <span class="details">School</span>
                         <select name="school" id="school">
                                 <option>--Select One--</option>
                                 <option name="marriage"  value="School of Marriage">School of Marriage</option>
                                 <option name="shepherds" label="Shepherds School" value="Shepherds School"></option>
                                 <option name="bible" label="Bible School" value="Bible School"></option>
                                 <option name="ministry" label="Ministry/Discipleship" value="Ministry/Discipleship"></option>
                         </select>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Enrol" name="enrol">
                      </div>
             </form>
         </div>-->

     </div>
     


     <div class="cbody">
     <div class="container">

        
            
            <div class="box">
                <a href="../departments/pasmarriage.php">
                <div class="imgBx">
                    <img src="../icons/User/contacts-fill.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../icons/User/contacts-fill.svg" alt="">
                    </div>
                    <h3>SCHOOL OF MARRIAGE</h3>
                </div>
                </a>
            </div>
          
           
        
            
            <div class="box">
                <a href="../departments/pasminilead.php">
                <div class="imgBx">
                    <img src="../bicons/journal-check.svg" alt="">
                </div>
                <div class="content">
                <div class="icon">
                        <img src="../bicons/journal-check.svg" alt="">
                    </div>
                    <h3>MINISTRY & LEADERSHIP</h3>
                </div>
                </a>
            </div>
            
            
        
        <div class="box">
            <a href="../departments/pashepherds.php">
            <div class="imgBx">
                <img src="../bicons/person-bounding-box.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/person-bounding-box.svg" alt="">
                </div>
                <h3>SHEPHERDS SCHOOL</h3>
            </div>
            </a>
        </div>
        
        
        <div class="box">
                <a href="../departments/pasbible.php">
                <div class="imgBx">
                    <img src="../icons/User/contacts-fill.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../icons/User/contacts-fill.svg" alt="">
                    </div>
                    <h3>BIBLE SCHOOL</h3>
                </div>
                </a>
            </div>
          
        

    </div>
    </div>
      
    
</body>
<script src="schools.js"></script>
</html>