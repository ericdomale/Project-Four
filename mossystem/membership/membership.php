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
        <h2 class="heading">MEMBERSHIP</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
                <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <!--<li><a href="#" class="person" id="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login">Add Member</button></a>

    </header>




    <div class="popup">
        <div class="close-btn">&times;</div>

        <div class="container">
            <div class="title">Registration</div>
            <form action="memberconnect.php" method="POST">

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Member ID</span>
                        <input type="text" id="memberno" name="memberno" value="<?php echo $number; ?>" readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">D.O.B</span>
                        <input type="date" placeholder="Enter Date of Birth" name="memdate" id="memdate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Gender</span>
                        <select name="gender" id="gender" class="gender" required>
                            <option>--Select One--</option>
                            <option value="Male" name="male" class="male">Male</option>
                            <option label="Female" value="Female" name="female" class="female"></option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Status</span>
                        <select name="status" id="status" required>
                            <option>--Select One--</option>
                            <option name="Single" value="Single">Single</option>
                            <option name="Married" label="Married" value="Married"></option>
                            <option name="Divorced" label="Divorced" value="Divorced"></option>
                            <option name="Widow" label="Widow" value="Widow"></option>
                            <option name="Widower" label="Widower" value="Widower"></option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" id="email" placeholder="Enter Valid Email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact Number</span>
                        <input type="text" placeholder="Enter Contact Number" name="contact" id="contact" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Residential Address</span>
                        <input type="text" placeholder="Enter Residential Address" name="maddress" id="maddress"
                            required>
                    </div>
                    <div class="input-box">
                        <span class="details">G.P.S Address</span>
                        <input type="text" placeholder="Enter G.P.S Address" name="paddress" id="paddress">
                    </div>
                    <div class="input-box">
                        <span class="details">Occupation</span>
                        <input type="text" placeholder="Enter Occupation" name="work" id="work" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Church Group</span>
                        <select name="chgroup" id="chgroup">
                            <option>--Select One--</option>
                            <option name="Protocol" value="Protocol">Protocol</option>
                            <option name="Ushers" label="Ushers" value="Ushers"></option>
                            <option name="Prayer" label="Prayer" value="Prayer"></option>
                            <option name="Choir" label="Choir" value="Choir"></option>
                            <option name="Instrumentals" label="Instrumentals" value="Instrumentals"></option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Cell</span>
                        <select name="cell" id="cell">
                            <option>--Select One--</option>
                            <option name="overcomers" value="Overcomers">Overcomers</option>
                            <option name="opheavens" label="Open Heavens" value="Open Heavens"></option>
                            <option name="breakthrough" label="Breakthrough" value="Breakthrough"></option>
                            <option name="morningstar" label="Morning Star" value="Morning Star"></option>
                            <option name="breadlife" label="Bread of Life" value="Bread of Life"></option>
                            <option name="dunamis" label="Dunamis" value="Dunamis"></option>
                            <option name="wellspring" label="Wellspring" value="Wellspring"></option>
                            <option name="passion" label="Passion" value="Passion"></option>
                            <option name="holyhill" label="Holy Hill" value="Holy Hill"></option>
                            <option name="goodshepherd" label="Good Shepherd" value="Good Shepherd"></option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Member Since</span>
                        <input type="text" placeholder="Enter Date" name="since" id="since">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Register" name="submit" id="submit">
                </div>
            </form>
        </div>

    </div>


 

    <a href="memberprint.php"><button id="show-login" name="show-login">Print</button></a><br>
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
                        <th>VIEW</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php require 'memberdisplay.php' ?>
                </tbody>
            </table>
        </div>
    </div>


</body>



<script src="../jquery/datatables.js"></script>

<script src="membership.js"></script>





</html>