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
    <title>Children</title>
    <link rel="stylesheet" href="children.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
    
</head>
<body>

     <header>
       <img src="../icons/User/parent-fill.svg" alt="logo" class="logo">
       <h2 class="heading">KINGDOM PEARLS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <!--<a href="#"><button  id="show-login" name="show-login">Add Record</button></a>-->
       
     </header>


     <div class="cbody">
     <div class="container">

        
            
            <div class="box">
                <a href="childlist.php">
                <div class="imgBx">
                    <img src="../icons/User/contacts-fill.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../icons/User/contacts-fill.svg" alt="">
                    </div>
                    <h3>LIST</h3>
                </div>
                </a>
            </div>
          
           
        
            
            <div class="box">
                <a href="childclass.php">
                <div class="imgBx">
                    <img src="../bicons/journal-check.svg" alt="">
                </div>
                <div class="content">
                <div class="icon">
                        <img src="../bicons/journal-check.svg" alt="">
                    </div>
                    <h3>CLASSES</h3>
                </div>
                </a>
            </div>
            
            
        
        <div class="box">
            <a href="childteacher.php">
            <div class="imgBx">
                <img src="../bicons/person-bounding-box.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/person-bounding-box.svg" alt="">
                </div>
                <h3>TEACHERS</h3>
            </div>
            </a>
        </div>
        
        

        
        

        

    </div>
    </div>
      


    
    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script> 
</body>
<script src="child.js"></script>
</html>