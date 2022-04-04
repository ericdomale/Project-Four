<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}
 
$connection = new mysqli('127.0.0.1:3307','root','','mossystem');
$query = "SELECT memberno FROM membership ORDER BY memberno DESC";
$result = mysqli_query($connection,$query);

$row = mysqli_fetch_array($result);

$lastid = $row['memberno'];

if (empty($lastid))
{
    $number = "MOS-01";
}
else
{
    $idd = str_replace("MOS-","",$lastid);
    $newid = str_pad($idd + 1, 2,0,STR_PAD_LEFT);
    $number = 'MOS-' .$newid;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membership</title>
    <link rel="stylesheet" href="membership.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
  
    <link rel="stylesheet" href="../jquery/datatables.css">
    <link rel="stylesheet" href="../jquery/font-awesome.css" media="all">
</head>

<body>

    <header>
        <img src="../icons/User/user-3-line.svg" alt="logo" class="logo">
        <h2 class="heading2">MEMBERSHIP</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
                <li><a href="../administration/admin.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <!--<li><a href="#" class="person" id="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">-</button></a>

    </header>



    <a href="admembership.php"><button id="show-login" name="show-login">Back</button></a><br>
    <div class="containero">
    
        <div class="table-responsive">
            <table class="contentable" id="contable">
            
                <thead>
                    <tr>
                        <th>MEMBER ID</th>
                        <th>NAME</th>
                        <th>GENDER</th>
                        <th>D.O.B</th>
                        <th>CONTACT</th>
                        <th>STATUS</th>
                        <th>GPS ADDRESS</th>
                        <th>GROUP</th>
                        <th>CELL</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php require 'memprintdisplay.php' ?>
                </tbody>
            </table>
        </div>
    </div>


</body>



<script src="../jquery/datatables.js"></script>
<script>

$(document).ready(function(){

$('#contable').DataTable({
 "processing" : true,
 "serverSide" : true,
 "ajax" : {
      url:"fetch.php",
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






</html>