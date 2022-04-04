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
    <title>Offerings Report</title>
    <link rel="stylesheet" href="offerings.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../icons/Finance/hand-coin-line.svg" alt="logo" class="logo">
       <h2 class="heading2">OFFERINGS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">+</button></a>
       
     </header>


     <a href="offerings.php"><button  id="show-login" name="show-login">Back</button></a>
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
                </tr>
            </thead>
            <tbody>
               <?php //require 'offerprintdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div><br class="break">



    <script src="../jquery/datatables.js"></script>
    <script>

$(document).ready(function(){

$('#contable').DataTable({
 "processing" : true,
 "serverSide" : true,
 "ajax" : {
      url:"offerfetch.php",
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