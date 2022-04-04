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
    <title>Baptisms Report</title>
    <link rel="stylesheet" href="baptisms.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>

<body>

    <header>
        <img src="../icons/Finance/water-flash-line.svg" alt="logo" class="logo">
        <h2 class="heading2">BAPTISMS</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
                <li><a href="../baptisms/baptisms.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">-</button></a>

    </header>



    <br><a href="baptisms.php"><button id="show-login" name="show-login">Back</button></a><br>
    <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>DATE</th>
                        <th>BAPTIZER</th>
                        <th>VENUE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //require 'baprintdisplay.php' ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="../jquery/datatables.js"></script>
    <script>

$(document).ready(function(){

$('#contable').DataTable({
 "processing" : true,
 "serverSide" : true,
 "ajax" : {
      url:"bapfetch.php",
      type:"POST"
     },
 dom: 'lBfrtip',
 buttons: [
  'excel', 'pdf'
 ],
 "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ]
});

});

</script>
</body>

</html>