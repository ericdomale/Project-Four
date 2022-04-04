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
    <title>Tithes</title>
    <link rel="stylesheet" href="tithe.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>

<body>

    <header>
        <img src="../bicons/coin.svg" alt="logo" class="logo">
        <h2 class="heading">TITHES</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/ ?></a></li>-->
                <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
                <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">-</button></a>

    </header>


    <div class="popup">
        <div class="close-btn">&times;</div>

        <div class="container">
            <div class="title">Add Record</div>
            <form action="titheconnect.php" method="POST">
                <div class="user-details">
                    <div class="input-box" hidden>
                        <span class="details">Tithe ID</span>
                        <input type="text" id="titid" name="titid">
                    </div>
                    <div class="input-box">
                        <span class="details">Week</span>
                        <input type="week" name="titweek" id="titweek" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date</span>
                        <input type="date" name="titdate" id="titdate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Month</span>
                        <select name="titmonth" id="titmonth">
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
                        <span class="details">Program</span>
                        <select name="titprogram" id="titprogram">
                            <option>--Select One--</option>
                            <option name="Sunday Service" label="Sunday Service" value="Sunday Service">Sunday Service
                            </option>
                            <option name="Anointing Service" label="Anointing Service" value="Anointing Service">
                                Anointing Service</option>
                            <option name="Thanksgiving Service" label="Thanksgiving Service" value="Thanksgiving Service">Thanksgiving Service</option>
                            <option name="Special Service" label="Special Service" value="Special Service">Special
                                Service</option>
                            <option name="Tuesday Service" label="Tuesday Service" value="Tuesday Service">Tuesday
                                Service</option>
                            <option name="Friday Night Service" label="Friday Night Service" value="Friday Night Service">Friday Night Service</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Amount</span>
                        <input type="text" name="titamount" id="titamount" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="titsubmit" id="titsubmit">
                </div>
            </form>
        </div>

    </div>




    <div class="spopup">
        <div class="close-btn">&times;</div>

        <div class="container">
            <div class="title">Add</div>
            <form action="indietitheconnect.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Member ID</span>
                        <input type="text" id="memberno" name="memberno" placeholder="Enter ID" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact</span>
                        <input type="text" placeholder="Enter Contact" name="contact" id="contact" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date</span>
                        <input type="date" name="titdate" id="titdate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Month</span>
                        <select name="titmonth" id="titmonth">
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
                        <span class="details">Amount</span>
                        <input type="text" name="titamount" id="titamount" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="indietitsubmit" id="indietitsubmit">
                </div>
            </form>
        </div>

    </div>




    <div class="jpopup">
        <div class="close-btn">&times;</div>

        <div class="container">
            <div class="title">Add Corporate</div>
            <form action="jointitheconnect.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Corporate ID</span>
                        <input type="text" id="cid" name="cid" placeholder="Enter ID" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Company Name</span>
                        <input type="text" placeholder="Enter Company Name" name="company" id="company" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Paid By</span>
                        <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact</span>
                        <input type="text" placeholder="Enter Contact" name="contact" id="contact" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Date</span>
                        <input type="date" name="titdate" id="titdate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Month</span>
                        <select name="titmonth" id="titmonth">
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
                        <span class="details">Amount</span>
                        <input type="text" name="titamount" id="titamount" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="jointitsubmit" id="jointitsubmit">
                </div>
            </form>
        </div>

    </div>


    <button class="tablink" onclick="openPage('Overall', this,'white')" id="active">OVERALL</button>
    <button class="tablink" onclick="openPage('Individual', this, 'white')">INDIVIDUAL<button>
    <button class="tablink" onclick="openPage('Couples', this, 'white')">CORPORATE</button>



            <div id="Overall" class="tabcontent">
            <a href="overallprint.php"><button id="show-login" name="show-login">Print</button></a><br>
                <div class="containero">
                    <a href="#"><button id="overalltab" name="overalltab" class="overalltab">Add Overall</button></a><br>
                    <div class="table-responsive">
                        <table class="contentable" id="contable">
                            <thead>
                                <tr>
                                    <th>WEEK</th>
                                    <th>DATE</th>
                                    <th>MONTH</th>
                                    <th>PROGRAM</th>
                                    <th>AMOUNT</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require 'tithedisplay.php' ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div id="Individual" class="tabcontent">
            <a href="indieprint.php"><button id="show-login" name="show-login">Print</button></a><br>
                <div class="containero">
                    <a href="#"><button id="indietab" name="indietab" class="indietab">Add Individual</button></a><br>
                    <div class="table-responsive">
                        <table class="contentable" id="indietable">
                            <thead>
                                <tr>
                                    <th>MEMBER ID</th>
                                    <th>FULLNAME</th>
                                    <th>CONTACT</th>
                                    <th>DATE</th>
                                    <th>MONTH</th>
                                    <th>AMOUNT</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require 'indietithedisplay.php' ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div id="Couples" class="tabcontent">
            <a href="corprint.php"><button id="show-login" name="show-login">Print</button></a><br>
                <div class="containero">
                    <a href="#"><button id="jointab" name="jointab" class="jointab">Add Corporate</button></a><br>
                    <div class="table-responsive">
                        <table class="contentable" id="jointable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>COMPANY</th>
                                    <th>PAID BY</th>
                                    <th>CONTACT</th>
                                    <th>DATE</th>
                                    <th>MONTH</th>
                                    <th>AMOUNT</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require 'jointithedisplay.php' ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





            <script src="../jquery/datatables.js"></script>
            <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="tithe.js"></script>


</html>