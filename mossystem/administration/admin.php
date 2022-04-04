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
    <title>Administrator</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

     <header>
       <img src="../icons/Logos/twitter-line.svg" alt="logo" class="logo">
       <h2 class="heading">THE MOUNTAIN OF SALVATION</h2>
       <nav>
           <ul class="nav_links">
               <li><a href="#">Welcome, <?php echo $_SESSION['username'];?></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       <form action="../login/logout.php" method="POST">
       <a href="#" class="cta"><button name="logout_btn">ADMINISTRATOR</button></a>
       </form>
     </header>

     <div class="cbody">
     <div class="container">
         
            <div class="box">
                <a href="../membership/admembership.php">
                <div class="imgBx">
                    <img src="../icons/User/user-3-line.svg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="../icons/User/user-3-line.svg" alt="">
                    </div>
                    <h3>MEMBERSHIP</h3>
                </div>
                </a>
            </div>
         
            
        <div class="box">
            <a href="../staff/adstaff.php">
            <div class="imgBx">
                <img src="../icons/User/team-line.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/User/team-line.svg" alt="">
                </div>
                <h3>STAFF</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../attendance/admattendance.php">
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
            <a href="../events/adevents.php">
            <div class="imgBx">
                <img src="../bicons/pin-map-fill.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/pin-map-fill.svg" alt="">
                </div>
                <h3>EVENTS</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../announcements/adannounce.php">
            <div class="imgBx">
                <img src="../bicons/bell.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/bell.svg" alt="">
                </div>
                <h3>ANNOUNCEMENT</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../procurement/adprocurement.php">
            <div class="imgBx">
                <img src="../bicons/cash-coin.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/cash-coin.svg" alt="">
                </div>
                <h3>PROCUREMENT</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../churchprograms/adprogram.php">
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
            <a href="../schools/adschools.php">
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
            <a href="../children/adchildren.php">
            <div class="imgBx">
                <img src="../icons/User/parent-fill.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/User/parent-fill.svg" alt="">
                </div>
                <h3>PEARLS</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../assets/admasset.php">
            <div class="imgBx">
                <img src="../icons/System/lock-password-fill.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/System/lock-password-fill.svg" alt="">
                </div>
                <h3>ASSETS</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../visitors/advisitors.php">
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
            <a href="../company/adcompany.php">
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

        <div class="box">
            <a href="../adminboard/adminboard2.php">
            <div class="imgBx">
                <img src="../icons/System/dashboard-line.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/System/dashboard-line.svg" alt="">
                </div>
                <h3>ADMINBOARD</h3>
            </div>
            </a>
        </div>

    </div>
    </div>
      
</body>
</html>