<?php /*session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/

function load_shepherds(){
    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');
    $output = '';
    $sql = "SELECT * FROM sheplist ORDER BY shpid";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
        $output .= '<option value="'.$row["fullname"].'">'.$row["fullname"].'</option>';
    }
    return $output;
}

?>

<?php
function load_assistants(){
    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');
    $answer = '';
    $sql = "SELECT * FROM shepassist ORDER BY assid";
    $product = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($product))
    {
        $answer .= '<option value="'.$row["fullname"].'">'.$row["fullname"].'</option>';
    }
    return $answer;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shepherd Attendance</title>
    <link rel="stylesheet" href="shepattendance.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../bicons/calendar-check.svg" alt="logo" class="logo">
       <h2 class="heading3">RECORD DETAILS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../shepherds/pashepherds.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <!--<a href="#"><button  id="show-login" name="show-login">Add</button></a>-->
       
     </header>


     <a href="passhepattendance.php"><button  id="show-login" name="show-login"><-- BACK</button></a>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>MONTH</th>
                    <th>DATE</th>
                    <th>SHEPHERDS</th>
                    <th>ASSISTANTS</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'shepherd.attrecord.view.php' ?>
            </tbody>
     </table>
        </div>
    </div>


      
    
</body>
<script src="sheplist.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html> 