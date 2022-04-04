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
    <title>Individual Tithes</title>
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








    <br><a href="fintithe.php"><button id="show-login" name="show-login">Back</button></a><br>
    <div class="containero">
       
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
                    </tr>
                </thead>
                <tbody>
                    <?php //require 'indietitheprintdisplay.php' ?>
                </tbody>
            </table>
        </div>
    </div>








    <script src="../jquery/datatables.js"></script>

    <script>
    $(document).ready(function() {

        $('#indietable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "indiefetch.php",
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