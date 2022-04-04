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
    <title>Corporate Tithes</title>
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
                <li><a href="../tithes/tithe.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">-</button></a>

    </header>


  


    <br><a href="fintithe.php"><button id="show-login" name="show-login">Back</button></a><br>
    <div class="containero">
       
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
                    </tr>
                </thead>
                <tbody>
                    <?php //require 'jointprintdisplay.php' ?>
                </tbody>
            </table>
        </div>
    </div>








    <script src="../jquery/datatables.js"></script>

    <script>
    $(document).ready(function() {

        $('#jointable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "corfetch.php",
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