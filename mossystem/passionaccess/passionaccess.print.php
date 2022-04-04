<?php /*session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
function load_names(){
    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');
    $output = '';
    $sql = "SELECT * FROM membership  WHERE cell= 'Passion' ORDER BY memberno";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
        $output .= '<option value="'.$row["fullname"].'">'.$row["fullname"].'</option>';
    }
    return $output;
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passion</title>
    <link rel="stylesheet" href="passionaccess.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../bicons/card-checklist.svg" alt="logo" class="logo">
       <h2 class="heading2">PASSION</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
               <li><a href="../shepherds/pasdataentry.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">-</button></a>
       <!--<a href="#"><button  id="sho-login" name="sho-login">Attendance</button></a>-->
       
     </header>



     <a href="passionaccess.php"><button  id="show-login" name="show-login">Back</button></a>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>ATTENDANCE</th>
                    <th>PREACHER</th>
                    <th>MESSAGE</th>
                    <th>OFFERING</th>
                    <th>CONVERTS</th>
                    <th>CHORISTERS</th>
                </tr>
            </thead>
            <tbody>
               <?php //require 'passion.display.php' ?>
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
      url:"../cellentry/passionfetch.php",
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
<script src="passionaccess.js"></script>
</html> 