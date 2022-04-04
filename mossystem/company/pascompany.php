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
    <title>Companies</title>
    <link rel="stylesheet" href="company.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">

</head>

<body>

    <header>
        <img src="../icons/Buildings/bank-line.svg" alt="logo" class="logo">
        <h2 class="heading">COMPANIES</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
                <li><a href="../passistant/passistant.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">Add Company</button></a>

    </header>


    <div class="popup">
        <div class="close-btn">&times;</div>

        <div class="container">
            <div class="title">Add</div>
            <form action="pasconnect.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Company ID </span>
                        <input type="text" name="cid" id="cid" placeholder="Enter Company ID">
                    </div>
                    <div class="input-box">
                        <span class="details">Name of Company</span>
                        <input type="text" name="company" id="company" placeholder="Enter Name of Company">
                    </div>
                    <div class="input-box">
                        <span class="details">Name of Owner</span>
                        <input type="text" name="owner" id="owner" placeholder="Enter Name of Owner">
                    </div>
                    <div class="input-box">
                        <span class="details">Contact</span>
                        <input type="text" name="contact" id="contact" placeholder="Enter Contact of Owner">
                    </div>
                    <div class="input-box">
                        <span class="details">Function of Company</span>
                        <input type="text" name="function" id="function" placeholder="Enter Function of Company">
                    </div>
                    <div class="input-box">
                        <span class="details">Location of Company</span>
                        <input type="text" name="location" id="location" placeholder="Enter Location of Company">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Add Company" name="companyadd">
                </div>
            </form>
        </div>
    </div>




    <a href="pascompanyprint.php"><button id="show-login" name="show-login">Print</button></a>
    <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>OWNER</th>
                        <th>CONTACT</th>
                        <th>FUNCTION</th>
                        <th>LOCATION</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require 'companydisplay.php' ?>
                </tbody>
            </table>
        </div>
    </div>





    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>

<script src="company.js"></script>

</html>