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
    <title>Offerings</title>
    <link rel="stylesheet" href="offerings.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>

<body>

    <header>
        <img src="../icons/Finance/hand-coin-line.svg" alt="logo" class="logo">
        <h2 class="heading">OFFERINGS</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
                <li><a href="../finance/finance.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">Add Offering</button></a>

    </header>


    <div class="popup">
        <div class="close-btn">&times;</div>

        <div class="container">
            <div class="title">Add Record</div>
            <form action="finofferconnect.php" method="POST">
                <div class="user-details">
                   <!-- <div class="input-box" hidden>
                        <span class="details">Offering ID</span>
                        <input type="text" id="offid" name="offid">
                    </div>-->
                    <div class="input-box">
                         <span class="details">Month</span>
                         <select name="offmonth" id="offmonth">
                           <option>--Select One--</option>
                           <option value="January">January</option>
                           <option label="February" value="February"></option>
                           <option label="March" value="March"></option>
                           <option label="April" value="April"></option>
                           <option label="May" value="May"></option>
                           <option label="June" value="June"></option>
                           <option label="July" value="July"></option>
                           <option label="August" value="August"></option>
                           <option label="September" value="September"></option>
                           <option label="October" value="October"></option>
                           <option label="November" value="November"></option>
                           <option label="December" value="December"></option>
                       </select>
                     </div>
                    <div class="input-box">
                        <span class="details">Week</span>
                        <input type="week" name="offweek" id="offweek" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date</span>
                        <input type="date" name="offdate" id="offdate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Program</span>
                        <select name="offprogram" id="offprogram">
                            <option>--Select One--</option>
                            <option name="Empowerment Service" label="Empowerment Service" value="Empowerment Service">Empowerment Service</option>
                            <option name="Armour Service" label="Armour Service" value="Armour Service">Armour Service</option>
                            <option name="Missiles Service" label="Missiles Service" value="Missiles Service">Missiles Service</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Type</span>
                        <select name="offertype" id="offertype">
                            <option>--Select One--</option>
                            <option name="Sunday Offering" value="Sunday Offering">Sunday Offering</option>
                            <option name="Seed Offering" label="Seed Offering" value="Seed Offering">Seed Offering
                            </option>
                            <option name="Thanksgiving" label="Thanksgiving" value="Thanksgiving">Thanksgiving</option>
                            <option name="Special Offering" label="Special Offering" value="Special Offering">Special
                                Offering</option>
                            <option name="First Fruit" label="First Fruit" value="First Fruit">First Fruit</option>
                            <option name="Sacrifice Offering" label="Sacrifice Offering" value="Sacrifice Offering">
                                Sacrifice Offering</option>
                            <option name="Tuesday Offering" value="Tuesday Offering">Tuesday Offering</option>
                            <option name="Friday Night Offering" value="Friday Night Offering">Friday Night Offering
                            </option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Amount</span>
                        <input type="text" name="ofamount" id="ofamount" placeholder="Enter Amount" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="offsubmit" id="submit">
                </div>
            </form>
        </div>

    </div>

    <a href="finofferprint.php"><button id="show-login" name="show-login">Print</button></a>
    <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
                <thead>
                    <tr>
                        <th>MONTH</th>
                        <th>WEEK</th>
                        <th>DATE</th>
                        <th>SERVICE</th>
                        <th>OFFERING</th>
                        <th>AMOUNT</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require 'finofferdisplay.php' ?>
                </tbody>
            </table>
        </div>
    </div>



    <!--<div class="break">
        <h2 class="heading center">CELL OFFERINGS</h2>
        <a href="cellofferprint.php"><button id="show-login" name="show-login">Print</button></a>
        <div class="containero">
            <div class="table-responsive">
                <table class="contentable" id="celltable">
                    <thead>
                        <tr>
                            <th>WEEK</th>
                            <th>DATE</th>
                            <th>SERVICE</th>
                            <th>OFFERING</th>
                            <th>AMOUNT</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php //require 'offerdisplay.php' ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>-->


    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="offerings.js"></script>

</html>