<?php /*session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/

$connection = new mysqli('127.0.0.1:3307','root','','mossystem');
$query = "SELECT partnerno FROM partners ORDER BY partnerno DESC";
$result = mysqli_query($connection,$query);

$row = mysqli_fetch_array($result);

$lastid = $row['partnerno'];

if (empty($lastid))
{
    $number = "POS-01";
}
else
{
    $idd = str_replace("POS-","",$lastid);
    $newid = str_pad($idd + 1, 2,0,STR_PAD_LEFT);
    $number = 'POS-' .$newid;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partners</title>
    <link rel="stylesheet" href="partners.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../icons/User/user-heart-line.svg" alt="logo" class="logo">
       <h2 class="heading">PARTNERS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../passistant/passistant.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Partner</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Registration</div>
             <form action="paspartconnect.php" method="POST">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Partner ID</span>
                         <input type="text" id="partnerno" name="partnerno" value="<?php echo $number; ?>" readonly>
                     </div>
                     <div class="input-box">
                         <span class="details">Full Name</span>
                         <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required>
                     </div>
                     <div class="input-box">
                         <span class="details">D.O.B</span>
                         <input type="date" placeholder="Enter Date of Birth" name="partdate" id="partdate" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Gender</span>
                         <select name="gender" id="gender" class="gender">
                                <option>--Select One--</option>
                                 <option value="Male" name="male" class="male">Male</option>
                                 <option label="Female" value="female" name="female" class="female"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Status</span>
                         <select name="status" id="status">
                                 <option>--Select One--</option>
                                 <option name="Single"  value="Single">Single</option>
                                 <option name="Married" label="Married" value="Married"></option>
                                 <option name="Divorced" label="Divorced" value="Divorced"></option>
                                 <option name="Widow" label="Widow" value="Widow"></option>
                                 <option name="Widower" label="Widower" value="Widower"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Email</span>
                         <input type="email" name="email" id="email" placeholder="Enter Valid Email" >
                     </div>
                     <div class="input-box">
                         <span class="details">Contact Number</span>
                         <input type="text" placeholder="Enter Contact Number" name="contact" id="contact" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Residential Address</span>
                         <input type="text" placeholder="Enter Residential Address" name="partaddress" id="partaddress">
                     </div>
                     <div class="input-box">
                         <span class="details">G.P.S Address</span>
                         <input type="text" placeholder="Enter G.P.S Address" name="gpsaddress" id="gpsaddress">
                     </div>
                     <div class="input-box">
                         <span class="details">Occupation</span>
                         <input type="text" placeholder="Enter Occupation" name="work" id="work">
                     </div>
                     <div class="input-box">
                         <span class="details">Partner Since</span>
                         <input type="text" placeholder="Enter Date" name="since" id="since" required>
                     </div>
                 </div>
                      <div class="button">
                      <input type="submit" value="Add Partner" name="partner" id="submit">
                      </div>
             </form>
         </div>


     </div>

     <br><a href="pasprintpartner.php"><button  id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>MEMBER ID</th>
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                    <th>PROFILE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'paspartnerdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>
    
</body>
<script src="partners.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html>