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
    <title>Teachers</title>
    <link rel="stylesheet" href="teacherprint.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">

</head>

<body>

    <header>
        <img src="../bicons/person-bounding-box.svg" alt="logo" class="logo">
        <h2 class="heading">TEACHERS</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
                <li><a href="../children/adchildren.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">-</button></a>

    </header>


    <div class="popup">
        <div class="close-btn">&times;</div>

        <div class="container">
            <div class="title">Add</div>
            <form action="teachconnect.php" method="POST">

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Teacher ID</span>
                        <input type="text" id="teacherno" name="teacherno" placeholder="Enter ID of Teacher">
                    </div>
                        <div class="input-box">
                            <span class="details">Name</span>
                            <input type="text" name="teachername" id="teachername" placeholder="Enter Name of Teacher">
                        </div>
                        <div class="input-box">
                            <span class="details">D.O.B</span>
                            <input type="date" name="teachbirth" id="teachbirth" placeholder="Enter Date of Birth">
                        </div>
                        <div class="input-box">
                            <span class="details">Gender</span>
                            <select name="gender" id="gender" class="gender" required>
                                <option>--Select One--</option>
                                <option value="Male" name="male">Male</option>
                                <option label="Female" value="Female" name="female"></option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Class Assigned</span>
                            <select name="classgroup" id="classgroup" required>
                                <option>--Select One--</option>
                                <option value="0-2yrs" name="baby">0-2yrs</option>
                                <option label="3-5yrs" value="3-5yrs" name="infant"></option>
                                <option label="6-9yrs" value="6-9yrs" name="child"></option>
                                <option label="10-12yrs" value="10-12yrs" name="adolescent"></option>
                                <option label="13-19yrs" value="13-19yrs" name="teen"></option>
                                <option label="20-above" value="20-above" name="adult"></option>
                            </select>
                        </div>
                        
                        <div class="input-box">
                            <span class="details">Qualification</span>
                            <input type="text" name="qualify" id="qualify" placeholder="Enter Level of Qualification">
                        </div>
                        <div class="input-box">
                            <span class="details">Occupation</span>
                            <input type="text" name="work" id="work" placeholder="Enter Occupation">
                        </div>
                        
                     </div>
                    <div class="button">
                        <input type="submit" value="Add Record" name="teacher">
                    </div>
                  
            </form>
        </div>

    </div>


    <a href="adchildteacher.php"><button id="show-login" name="show-login">Back</button></a><br>
    <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>D.O.B</th>
                    <th>GENDER</th>
                    <th>GROUP</th>
                    <th>QUALIFICATIONS</th>
                    <th>OCCUPATION</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'teacherdisplay.php' ?>
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
      url:"fetchteacher.php",
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