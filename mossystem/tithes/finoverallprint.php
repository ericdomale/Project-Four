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
        <h2 class="heading2">TITHES</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/ ?></a></li>-->
                <li><a href="../tithes/fintithe.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
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
                            <option name="Thanksgiving Service" label="Thanksgiving Service"
                                value="Thanksgiving Service">Thanksgiving Service</option>
                            <option name="Special Service" label="Special Service" value="Special Service">Special
                                Service</option>
                            <option name="Tuesday Service" label="Tuesday Service" value="Tuesday Service">Tuesday
                                Service</option>
                            <option name="Friday Night Service" label="Friday Night Service"
                                value="Friday Night Service">Friday Night Service</option>
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













    <br><a href="fintithe.php"><button id="show-login" name="show-login">Back</button></a><br>
    <div class="containero">
       
        <div class="table-responsive">
            <table class="contentable" id="contable">
                <thead>
                    <tr>
                        <th>WEEK</th>
                        <th>DATE</th>
                        <th>MONTH</th>
                        <th>PROGRAM</th>
                        <th>AMOUNT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //require 'titheprintdisplay.php' ?>
                </tbody>
            </table>
        </div>
    </div>








    <script src="../jquery/datatables.js"></script>

    <script>
    $(document).ready(function() {

        $('#contable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "overallfetch.php",
                type: "POST"
            },
            dom: 'lBfrtip',
            buttons: [
                'excel', 'pdf'
            ],
            "lengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ]
        });

    });
    </script>
</body>



</html>