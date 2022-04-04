<?php /*session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/

$connection = new mysqli('127.0.0.1:3307','root','','mossystem');
$query = "SELECT childno FROM childlist ORDER BY childno DESC";
$result = mysqli_query($connection,$query);

$row = mysqli_fetch_array($result);

$lastid = $row['childno'];

if (empty($lastid))
{
    $number = "MCH-01";
}
else
{
    $idd = str_replace("MCH-","",$lastid);
    $newid = str_pad($idd + 1, 2,0,STR_PAD_LEFT);
    $number = 'MCH-' .$newid;
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Childlist</title>
    <link rel="stylesheet" href="childlist.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">

</head>

<body>

    <header>
        <img src="../icons/User/contacts-fill.svg" alt="logo" class="logo">
        <h2 class="heading2">LIST</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
                <li><a href="../children/children.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
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
            <form action="childconnect.php" method="POST">

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Child ID</span>
                        <input type="text" id="childno" name="childno" value="<?php echo $number; ?>" readonly>
                    </div>
                        <div class="input-box">
                            <span class="details">Name</span>
                            <input type="text" name="childname" id="childname" placeholder="Enter Name of Child">
                        </div>
                        <div class="input-box">
                            <span class="details">D.O.B</span>
                            <input type="date" name="childbirth" id="childbirth" placeholder="Enter Date of Birth">
                        </div>
                        <div class="input-box">
                            <span class="details">Age Group</span>
                            <select name="agegroup" id="agegroup" required>
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
                            <span class="details">Gender</span>
                            <select name="gender" id="gender" class="gender" required>
                                <option>--Select One--</option>
                                <option value="Male" name="male">Male</option>
                                <option label="Female" value="Female" name="female"></option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details">Father's Name</span>
                            <input type="text" name="childfather" id="childfather" placeholder="Enter Father's Name">
                        </div>
                        <div class="input-box">
                            <span class="details">Mother's Name</span>
                            <input type="text" name="childmother" id="childmother" placeholder="Enter Mother's Name">
                        </div>
                        <div class="input-box">
                            <span class="details">Residential Address</span>
                            <input type="text" name="childaddress" id="childaddress" placeholder="Enter Child Address">
                        </div>
                        <div class="input-box">
                            <span class="details">School</span>
                            <input type="text" name="childschool" id="childschool" placeholder="Enter School of Child">
                        </div>
                        <div class="input-box">
                            <span class="details">Class</span>
                            <input type="text" name="childclass" id="childclass" placeholder="Enter Class of Child">
                        </div>
                        <div class="input-box">
                            <span class="details">Teacher</span>
                            <input type="text" name="childteacher" id="childteacher"
                                placeholder="Enter Name of Teacher">
                        </div>
                     </div>
                    <div class="button">
                        <input type="submit" value="Add Record" name="childlist">
                    </div>
                  
            </form>
        </div>

    </div>



    <a href="childlist.php"><button id="show-login" name="show-login">Back</button></a><br>
    <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>D.O.B</th>
                    <th>GENDER</th>
                    <th>AGE GROUP</th>
                    <th>CONTACT</th>
                    <th>SCHOOL</th>
                    <th>CLASS</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'childisplay.php' ?>
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
      url:"childfetch.php",
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