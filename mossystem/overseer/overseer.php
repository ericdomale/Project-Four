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
    <title>Overseer</title>
    <link rel="stylesheet" href="overseer.css">
</head>
<body>

     <header>
       <img  src="../icons/Logos/twitter-line.svg" alt="logo" class="logo">
       <h2 class="heading">THE MOUNTAIN OF SALVATION</h2>
       <nav>
           <ul class="nav_links">
               <li><a href="#">Welcome, <?php echo $_SESSION['username'];?></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       <form action="../login/logout.php" method="POST">
       <a href="#" class="cta"><button name="logout_btn">OVERSEER</button></a>
       </form>
     </header>

     <div class="cbody">
     <div class="container">

        
            
            <div class="box">
                <a href="../membership/membership.php">
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
                <a href="../staff/staff.php">
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
            <a href="../attendance/attendance.php">
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
            <a href="../events/events.php">
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
            <a href="../announcements/announce.php">
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
            <a href="../shepherds/shepherds.php">
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
            <a href="../procurement/procurement.php">
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
            <a href="../offerings/offerings.php">
            <div class="imgBx">
                <img src="../icons/Finance/hand-coin-line.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/Finance/hand-coin-line.svg" alt="">
                </div>
                <h3>OFFERINGS</h3>
            </div>
            </a>
        </div>
      

        
        <div class="box">
            <a href="../tithes/tithe.php">
            <div class="imgBx">
                <img src="../bicons/coin.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/coin.svg" alt="">
                </div>
                <h3>TITHES</h3>
            </div>
            </a>
        </div>
       

        
        <div class="box">
            <a href="../pledges/pledges.php">
            <div class="imgBx">
                <img src="../icons/Business/medal-fill.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/Business/medal-fill.svg" alt="">
                </div>
                <h3>PLEDGES</h3>
            </div>
            </a>
        </div>
       

        
        <div class="box">
            <a href="../expenses/expenses.php">
            <div class="imgBx">
                <img src="../icons/Finance/funds-line.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/Finance/funds-line.svg" alt="">
                </div>
                <h3>EXPENSES</h3>
            </div>
            </a>
        </div>
       

       
        <div class="box">
            <a href="../books/books.php">
            <div class="imgBx">
                <img src="../icons/Document/book-mark-line.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/Document/book-mark-line.svg" alt="">
                </div>
                <h3>BOOKS</h3>
            </div>
            </a>
        </div>
     

        
        <div class="box">
            <a href="../certificates/certificates.php">
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
            <a href="../baptisms/baptisms.php">
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
            <a href="../prayers/prayers.php">
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
            <a href="../bookings/bookings.php">
            <div class="imgBx">
                <img src="../bicons/book.svg" alt="">
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
            <a href="../churchprograms/program.php">
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
            <a href="../partners/partners.php">
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
            <a href="../schools/schools.php">
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
            <a href="../assets/assets.php">
            <div class="imgBx">
                <img src="../icons/System/lock-password-fill.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/System/lock-password-fill.svg" alt="">
                </div>
                <h3>ASSETS MANAGEMENT</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../children/children.php">
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
            <a href="../visitors/visitors.php">
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
            <a href="../revbooks/revbooks.php">
            <div class="imgBx">
                <img src="../icons/Document/booklet-fill.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../icons/Document/booklet-fill.svg" alt="">
                </div>
                <h3>PASTOR'S BOOKS</h3>
            </div>
            </a>
        </div>

        <div class="box">
            <a href="../company/company.php">
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
            <a href="../adminboard/adminboard.php">
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

        <div class="box">
            <a href="../finboard/finboard.php">
            <div class="imgBx">
                <img src="../bicons/menu-app-fill.svg" alt="">
            </div>
            <div class="content">
            <div class="icon">
                    <img src="../bicons/menu-app-fill.svg" alt="">
                </div>
                <h3>FINBOARD</h3>
            </div>
            </a>
        </div>
      

    </div>
    </div>
      
</body>
</html>