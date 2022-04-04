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
    <title>Finance</title>
    <link rel="stylesheet" href="finance.css">
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
       <a href="#" class="cta"><button name="logout_btn">FINANCE</button></a>
       </form>
     </header>

     <div class="cbody">
     <div class="container">
     

        <div class="box">
            <a href="../offerings/finofferings.php">
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
        <a href="../tithes/fintithe.php">
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
        <a href="../pledges/finpledges.php">
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
        <a href="../expenses/finexpenses.php">
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
        <a href="../books/finbooks.php">
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
        <a href="../procurement/finprocurement.php">
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
            <a href="../finboard/finboard2.php">
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