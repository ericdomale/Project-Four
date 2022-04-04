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
    <title>Data Entry</title>
    <link rel="stylesheet" href="dataentry.css">
</head>
<body>

     <header>
       <img src="../bicons/card-checklist.svg" alt="logo" class="logo">
       <h2 class="heading">DATA ENTRY</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../shepherds/shepherds.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       
       <!--<a href="#"><button  id="show-login" name="show-login">Add Shepherd</button></a>-->
       
     </header>



     <div class="cbody">
      <div class="container">

        
            
            <div class="box">
                <a href="../cellentry/overcomers.php">
                <div class="imgBx">
                    <img src="../bicons/card-checklist.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../bicons/card-checklist.svg" alt="">
                    </div>
                    <h3>OVERCOMERS</h3>
                </div>
                </a>
            </div>
        
            
            <div class="box">
                <a href="../cellentry/openheavens.php">
                <div class="imgBx">
                    <img src="../bicons/card-checklist.svg" alt="">
                </div>
                <div class="content">
                <div class="icon">
                        <img src="../bicons/card-checklist.svg" alt="">
                    </div>
                    <h3>OPEN HEAVENS</h3>
                </div>
                </a>
            </div>
            
            
        
        <div class="box">
            <a href="../cellentry/breakthrough.php">
            <div class="imgBx">
                <img src="../bicons/card-checklist.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/card-checklist.svg" alt="">
                </div>
                <h3>BREAKTHROUGH</h3>
            </div>
            </a>
        </div>
        

        <div class="box">
                <a href="../cellentry/morningstar.php">
                <div class="imgBx">
                    <img src="../bicons/card-checklist.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../bicons/card-checklist.svg" alt="">
                    </div>
                    <h3>MORNING STAR</h3>
                </div>
                </a>
            </div>


            <div class="box">
                <a href="../cellentry/breadoflife.php">
                <div class="imgBx">
                    <img src="../bicons/card-checklist.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../bicons/card-checklist.svg" alt="">
                    </div>
                    <h3>BREAD OF LIFE</h3>
                </div>
                </a>
            </div>

            
            <div class="box">
                <a href="../cellentry/dunamis.php">
                <div class="imgBx">
                    <img src="../bicons/card-checklist.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../bicons/card-checklist.svg" alt="">
                    </div>
                    <h3>DUNAMIS</h3>
                </div>
                </a>
            </div>


            <div class="box">
                <a href="../cellentry/wellspring.php">
                <div class="imgBx">
                    <img src="../bicons/card-checklist.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../bicons/card-checklist.svg" alt="">
                    </div>
                    <h3>WELLSPRING</h3>
                </div>
                </a>
            </div>


            <div class="box">
                <a href="../cellentry/passion.php">
                <div class="imgBx">
                    <img src="../bicons/card-checklist.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../bicons/card-checklist.svg" alt="">
                    </div>
                    <h3>PASSION</h3>
                </div>
                </a>
            </div>

             
            <div class="box">
                <a href="../cellentry/holyhill.php">
                <div class="imgBx">
                    <img src="../bicons/card-checklist.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../bicons/card-checklist.svg" alt="">
                    </div>
                    <h3>HOLY HILL</h3>
                </div>
                </a>
            </div>


            <div class="box">
                <a href="../cellentry/goodshepherd.php">
                <div class="imgBx">
                    <img src="../bicons/card-checklist.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../bicons/card-checklist.svg" alt="">
                    </div>
                    <h3>GOOD SHEPHERD</h3>
                </div>
                </a>
            </div>
          
           

     </div>
    </div>
      
    
</body>
<script src="dataentry.js"></script>
</html> 