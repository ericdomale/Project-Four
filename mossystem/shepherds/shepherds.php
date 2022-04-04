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
    <title>Shepherds</title>
    <link rel="stylesheet" href="shepherd.css">
</head>
<body>

     <header>
       <img src="../bicons/people.svg" alt="logo" class="logo">
       <h2 class="heading">SHEPHERDS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <!--<a href="#"><button  id="show-login" name="show-login">Add Shepherd</button></a>-->
       
     </header>



     <div class="cbody">
      <div class="container">

        
            
            <div class="box">
                <a href="sheplist.php">
                <div class="imgBx">
                    <img src="../icons/User/contacts-fill.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../icons/User/contacts-fill.svg" alt="">
                    </div>
                    <h3>SHEPHERD LIST</h3>
                </div>
                </a>
            </div>
          
           
        
            
            <div class="box">
                <a href="cells.php">
                <div class="imgBx">
                    <img src="../bicons/journal-check.svg" alt="">
                </div>
                <div class="content">
                <div class="icon">
                        <img src="../bicons/journal-check.svg" alt="">
                    </div>
                    <h3>CELLS</h3>
                </div>
                </a>
            </div>
            
            
        
        <div class="box">
            <a href="shepattendance.php">
            <div class="imgBx">
                <img src="../bicons/calendar-check.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/calendar-check.svg" alt="">
                </div>
                <h3>ATTENDANCE</h3>
            </div>
            </a>
        </div>
        

        <div class="box">
                <a href="shepassistant.php">
                <div class="imgBx">
                    <img src="../icons/User/contacts-fill.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../icons/User/contacts-fill.svg" alt="">
                    </div>
                    <h3>ASSISTANTS</h3>
                </div>
                </a>
            </div>


            <div class="box">
                <a href="dataentry.php">
                <div class="imgBx">
                    <img src="../bicons/card-checklist.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../bicons/card-checklist.svg" alt="">
                    </div>
                    <h3>DATA ENTRY</h3>
                </div>
                </a>
            </div>
          
           

        
        

     </div>
    </div>
      
    
</body>
<script src="shepherd.js"></script>
</html> 