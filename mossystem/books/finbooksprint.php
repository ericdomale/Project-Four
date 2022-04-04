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
    <title>Books Report</title>
    <link rel="stylesheet" href="books.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>

<body>

    <header>
        <img src="../icons/Document/book-mark-line.svg" alt="logo" class="logo">
        <h2 class="heading2">BOOKS</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
                <li><a href="../finance/finance.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">-</button></a>

    </header>




    <a href="finbooks.php"><button id="show-login" name="show-login">Back</button></a><br>
    <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
                <thead>
                    <tr>
                        <th>PUBLISHED</th>
                        <th>TITLE</th>
                        <th>STATUS</th>
                        <th>ISBN</th>
                        <th>QUANTITY</th>
                        <th>BOOK NUMBER</th>
                        <th>COST</th>
                        <th>AMOUNT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require 'booksprintdisplay.php' ?>
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
                url: "booksfetch.php",
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