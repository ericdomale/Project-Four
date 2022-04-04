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
    <title>Childclass</title>
    <link rel="stylesheet" href="childclass.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">

</head>

<body>

    <header>
        <img src="../bicons/journal-check.svg" alt="logo" class="logo">
        <h2 class="heading">CLASSES</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
                <li><a href="../children/children.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
            </ul>
        </nav>

        <!--<a href="#"><button id="show-login" name="show-login">Add Class</button></a>-->

    </header>


    


    <div class="cbody">
     <div class="container">

        
            
            <div class="box">
                <a href="../classes/babies.php">
                <div class="imgBx">
                    <img src="../icons/User/contacts-fill.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../icons/User/contacts-fill.svg" alt="">
                    </div>
                    <h3>GOLD</h3>
                </div>
                </a>
            </div>
          
           
        
            
            <div class="box">
                <a href="../classes/diamonds.php">
                <div class="imgBx">
                    <img src="../icons/User/contacts-fill.svg" alt="">
                </div>
                <div class="content">
                <div class="icon">
                        <img src="../icons/User/contacts-fill.svg" alt="">
                    </div>
                    <h3>DIAMONDS</h3>
                </div>
                </a>
            </div>
            
            
        
        <div class="box">
            <a href="../classes/emeralds.php">
            <div class="imgBx">
                <img src="../icons/User/contacts-fill.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/User/contacts-fill.svg" alt="">
                </div>
                <h3>EMERALDS</h3>
            </div>
            </a>
        </div>
        
        
        <div class="box">
                <a href="../classes/jasper.php">
                <div class="imgBx">
                    <img src="../icons/User/contacts-fill.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../icons/User/contacts-fill.svg" alt="">
                    </div>
                    <h3>JASPER</h3>
                </div>
                </a>
            </div>

            <div class="box">
                <a href="../classes/sapphire.php">
                <div class="imgBx">
                    <img src="../icons/User/contacts-fill.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../icons/User/contacts-fill.svg" alt="">
                    </div>
                    <h3>SAPPHIRE</h3>
                </div>
                </a>
            </div>

            <div class="box">
                <a href="../classes/disciples.php">
                <div class="imgBx">
                    <img src="../icons/User/contacts-fill.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../icons/User/contacts-fill.svg" alt="">
                    </div>
                    <h3>DISCIPLES</h3>
                </div>
                </a>
            </div>
          
        

    </div>
    </div>
      



    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="classes.js"></script>

</html>