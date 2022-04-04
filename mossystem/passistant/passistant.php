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
    <title>P.Assistant</title>
    <link rel="stylesheet" href="passistant.css">
</head>
<body>

     <header>
       <img src="../icons/Logos/twitter-line.svg" alt="logo" class="logo">
       <h2 class="heading">THE MOUNTAIN OF SALVATION</h2>
       <nav>
           <ul class="nav_links">
               <li><a href="#">Welcome, <?php echo $_SESSION['username'];?></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       <form action="../login/logout.php" method="POST">
       <a href="#" class="cta"><button name="logout_btn">P.ASSISTANT</button></a>
       </form>
     </header>

     <div class="cbody">
     <div class="container">
         
            <div class="box">
             <a href="../bookings/pasbookings.php">
                <div class="imgBx">
                    <img class="gradient" src="../bicons/book.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../bicons/book.svg" alt="">
                    </div>
                    <h3>BOOKINGS</h3>
                </div>
                </a>
            </div>
        
        
        <div class="box">
            <a href="../certificates/pascertificates.php">
            <div class="imgBx">
                <img src="../bicons/award.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/award.svg" alt="">
                </div>
                <h3>CERTIFICATES</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../baptisms/pasbaptisms.php">
            <div class="imgBx">
                <img src="../icons/Finance/water-flash-line.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/Finance/water-flash-line.svg" alt="">
                </div>
                <h3>BAPTISMS</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../shepherds/pashepherds.php">
            <div class="imgBx">
                <img src="../bicons/people.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/people.svg" alt="">
                </div>
                <h3>SHEPHERDS</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../churchprograms/pasprogram.php">
            <div class="imgBx">
                <img src="../bicons/calendar2-week.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/calendar2-week.svg" alt="">
                </div>
                <h3>PROGRAMS</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../partners/paspartners.php">
            <div class="imgBx">
                <img src="../icons/User/user-heart-line.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/User/user-heart-line.svg" alt="">
                </div>
                <h3>PARTNERS</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../visitors/pasvisitors.php">
            <div class="imgBx">
                <img src="../bicons/person-plus.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/person-plus.svg" alt="">
                </div>
                <h3>VISITORS</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../schools/paschools.php">
            <div class="imgBx">
                <img src="../icons/Buildings/community-line.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/Buildings/community-line.svg" alt="">
                </div>
                <h3>SCHOOLS</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../prayers/pasprayers.php">
            <div class="imgBx">
                <img src="../icons/Health/heart-pulse-line.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/Health/heart-pulse-line.svg" alt="">
                </div>
                <h3>PRAYERS</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../company/pascompany.php">
            <div class="imgBx">
                <img src="../icons/Buildings/bank-line.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/Buildings/bank-line.svg" alt="">
                </div>
                <h3>COMPANIES</h3>
            </div>
            </a>
        </div>
    </div>
    </div>
      
</body>
</html>