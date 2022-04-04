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
       <h2 class="heading">ATTENDANCE</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../shepherds/shepherds.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Enter Info</div>
             <form action="shepherds.atconnect.php" method="POST">
                 <div class="user-details">
                   <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="atdate" id="atdate">
                     </div>
                     <div class="input-box">
                         <span class="details">Month</span>
                         <select name="atmonth" id="atmonth">
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
                         <span class="details">Shepherds</span>
                         <input type="text" id="shepherds" name="shepherds" placeholder="Enter Number of Shepherds Present">
                     </div>
                     <div class="input-box">
                         <span class="details">Assistants</span>
                         <input type="text" id="assistants" name="assistants" placeholder="Enter Number of Assistants Present">
                     </div>
                     <div class="input-boxs">
                         <span class="details">Shepherds Check</span>
                         <select name="shepnames[]" id="shepnames" class="shepnames" multiple>
                             <option value="" name="shepnames[]" >--SELECT SHEPHERDS--</option>
                                <?php echo load_shepherds(); ?>
                         </select>
                     </div>
                     <div class="input-boxs">
                         <span class="details">Assistants Check</span>
                         <select name="assistnames[]" id="assistnames" class="assistnames" multiple>
                             <option value="" name="assistnames[]" >--SELECT ASSISTANTS--</option>
                                <?php echo load_assistants();  ?>
                         </select>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Record" name="attendance">
                      </div>
             </form>
         </div>

     </div>


     <a href="shepattendance.print.php"><button  id="show-login" name="show-login">Print</button></a>  
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>MONTH</th>
                    <th>DATE</th>
                    <th>SHEPHERDS</th>
                    <th>ASSISTANTS</th>
                    <th>EDIT</th>
                    <th>VIEW</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'shepherd.attend.php' ?>
            </tbody>
     </table>
        </div>
    </div>


      
    
</body>
<script src="sheplist.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html> 