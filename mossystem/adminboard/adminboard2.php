<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adminboard</title>
    <link rel="stylesheet" href="adminboard.css">
    <link rel="stylesheet" href="../jquery/font-awesome.min.css" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
</head>

<body>

    <!-- <header>
                <img src="../icons/System/dashboard-line.svg" alt="logo" class="logo">
                <h2 class="heading">Adminboard.</h2>
                <nav>
                    <ul class="nav_links">
                        <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
                        <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
                        <li><a href="#" class="person" id="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
                    </ul>
                </nav>
                <a href="#"><button  id="show-login" name="show-login">Add Member</button></a>  
    </header>-->



    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"><img src="../icons/System/dashboard-line.svg" alt="logo" class="logo"></span>
                        <span class="title">
                            <h2>Adminboard.</h2>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="../membership/admembership.php">
                        <span class="icon"><i class="fas fa-user"></i></span>
                        <span class="title">Membership</span>
                    </a>
                </li>
                <li>
                    <a href="../staff/adstaff.php">
                        <span class="icon"><i class="fas fa-usd"></i></span>
                        <span class="title">Staff</span>
                    </a>
                </li>
                <li>
                    <a href="../attendance/admattendance.php">
                        <span class="icon"><i class="fas fa-credit-card"></i></span>
                        <span class="title">Attendance</span>
                    </a>
                </li>
                <li>
                    <a href="../events/adevents.php">
                        <span class="icon"><i class="fas fa-bar-chart-o"></i></span>
                        <span class="title">Events</span>
                    </a>
                </li>
                <li>
                    <a href="../announcements/adannounce.php">
                        <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                        <span class="title">Announcements</span>
                    </a>
                </li>
                <li>
                    <a href="../procurement/adprocurement.php">
                        <span class="icon"><i class="fas fa-bullseye"></i></span>
                        <span class="title">Procurements</span>
                    </a>
                </li>
                <li>
                    <a href="../churchprograms/adprogram.php">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="title">Church Programs</span>
                    </a>
                </li>
                <li>
                    <a href="../schools/adschools.php">
                        <span class="icon"><i class="fas fa-shopping-basket"></i></span>
                        <span class="title">Schools</span>
                    </a>
                </li>
                <!--<li>
                    <a href="../settingsphp/settings.php">
                     <span class="icon"><i class="fas fa-cog"></i></span>
                     <span class="title">Admin & More</span>
                    </a>
                </li>-->
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder=" Search here...">
                        <i class="fas fa-search"></i>
                    </label>
                </div>
                <div class="user">
                    <!--<img src="giwc7.jpg">-->
                    <a href="../administration/admin.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a>
                </div>
            </div>

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php

                           $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                           $query = "SELECT memberno FROM membership";
                           $query_run = mysqli_query($conn,$query);

                           $row = mysqli_num_rows($query_run);

                           echo $row;

                             ?>
                        </div>
                        <div class="cardName">MEMBERS</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-user-circle"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php

                           $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                           $query = "SELECT staffid FROM staff";
                           $query_run = mysqli_query($conn,$query);

                           $row = mysqli_num_rows($query_run);

                           echo $row;

                             ?>
                        </div>
                        <div class="cardName">STAFF</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-users"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php

                           $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                           $query = "SELECT username FROM login";
                           $query_run = mysqli_query($conn,$query);

                           $row = mysqli_num_rows($query_run);

                           echo $row;

                             ?>
                        </div>
                        <div class="cardName">ADMINS</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-chess-knight"></i>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php

                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $query = "SELECT memberno FROM membership WHERE gender='male'";
                            $query_run = mysqli_query($conn,$query);

                            $row = mysqli_num_rows($query_run);

                            echo $row;

  ?>
                        </div>
                        <div class="cardName">MALES</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-male"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php

                           $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                           $query = "SELECT memberno FROM membership WHERE gender='female'";
                           $query_run = mysqli_query($conn,$query);

                           $row = mysqli_num_rows($query_run);

                           echo $row;

                             ?>
                        </div>
                        <div class="cardName">FEMALES</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-female"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php

                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $query = "SELECT memberno FROM membership WHERE work='student'";
                            $query_run = mysqli_query($conn,$query);

                            $row = mysqli_num_rows($query_run);

                            echo $row;

                            ?>
                        </div>
                        <div class="cardName">STUDENTS</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-address-book"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php

                           $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                           $query = "SELECT memberno FROM membership ORDER BY  id DESC LIMIT 5";
                           $query_run = mysqli_query($conn,$query);

                           $row = mysqli_num_rows($query_run);

                           echo $row;

                             ?>
                        </div>
                        <div class="cardName">NEW MEMBERS</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-user-plus"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">
                            <?php

                           $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                           $query = "SELECT childno FROM childlist";
                           $query_run = mysqli_query($conn,$query);

                           $row = mysqli_num_rows($query_run);

                           echo $row;

                             ?>
                        </div>
                        <div class="cardName">KINGDOM PEARLS</div>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-street-view"></i>
                    </div>
                </div>
            </div>


            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>ATTENDANCE</h2>
                        <!--<a href="" class="btn">View All</a>-->
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>DATE</td>
                                <td>MONTH</td>
                                <td>MEMBERS</td>
                                <td>CHILDREN</td>
                                <td>VISITORS</td>
                                <td>TOTAL</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT atdate,atmonth,memtotal,childtotal,vistotal,overtotal FROM attendance ORDER BY atid DESC";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['atdate'];?></td>
                                <td><?php echo $row['atmonth'];?></td>
                                <td><?php echo $row['memtotal'];?></td>
                                <td><?php echo $row['childtotal'];?></td>
                                <td><?php echo $row['vistotal'];?></td>
                                <td><span class="status"><?php echo $row['overtotal'];?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();   
                            ?>
                        </tbody>
                    </table>
                </div>




                

                
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>UPCOMING EVENTS</h2>
                        <!--<a href="" class="btn">View All</a>-->
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>DATE</td>
                                <td>EVENTNAME</td>
                                <td>VENUE</td>
                                <td>KIND</td>
                                <td>TYPE</td>
                                <td>DRESSCODE</td>
                                <td>EVENTCOLOURS</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT eventdate, eventname, eventvenue, eventkind, eventype, dresscode, eventcolours FROM events ORDER BY eventid DESC";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['eventdate'];?></td>
                                <td><?php echo $row['eventname'];?></td>
                                <td><?php echo $row['eventvenue'];?></td>
                                <td><?php echo $row['eventkind'];?></td>
                                <td><?php echo $row['eventype'];?></td>
                                <td><?php echo $row['dresscode'];?></td>
                                <td><?php echo $row['eventcolours'];?></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();   
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>





            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>ANNOUNCEMENTS</h2>
                        <!--<a href="" class="btn">Overview</a>-->
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>DATE</td>
                                <td>TYPE</td>
                                <td>MESSAGE</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT annid, anndate, anntype, anninfo FROM announcement ORDER BY annid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['anndate'];?></td>
                                <td><?php echo $row['anntype'];?></td>
                                <td><?php echo $row['anninfo'];?></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>
                        </tbody>
                    </table>
                </div>


                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>CHURCH PROGRAMS (RECENT)</h2>
                       <!--<a href="" class="btn">View All</a>-->
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>DATE</td>
                                <td>NAME</td>
                                <td>REVENUE</td>
                                <td>EXPENDITURE</td>
                                <td>SURPLUS/DEFICIT</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT chprogdate, chprogname, chprogrevenue, chprogexpend, supdef FROM chprograms ORDER BY chprogid DESC LIMIT 4";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['chprogdate'];?></td>
                                <td><?php echo $row['chprogname'];?></td>
                                <td><?php echo $row['chprogrevenue'];?></td>
                                <td><?php echo $row['chprogexpend'];?></td>
                                <td><?php echo $row['supdef'];?></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>







            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>CELLS</h2>
                        <!--<a href="" class="btn">Overview</a>-->
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>CELLS</td>
                                <td>MEMBERS</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT COUNT(memberno) AS members, cell FROM membership GROUP BY cell";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                             <tr>
                                <td><?php echo $row['cell'];?></td>
                                <td><?php echo $row['members'];?></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>
                        </tbody>
                    </table>
                </div>


                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>UPCOMING BOOKINGS</h2>
                       <!--<a href="" class="btn">View All</a>-->
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>DATE</td>
                                <td>PROGRAM</td>
                                <td>VENUE</td>
                                <td>RSVP</td>
                                <td>CONTACT</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT bkgdate, bkgprogram, bkgvenue, rsvp, bkgcontact FROM bookings ORDER BY id DESC LIMIT 5";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['bkgdate'];?></td>
                                <td><?php echo $row['bkgprogram'];?></td>
                                <td><?php echo $row['bkgvenue'];?></td>
                                <td><?php echo $row['rsvp'];?></td>
                                <td><?php echo $row['bkgcontact'];?></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>











           













            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>DAILY PROCUREMENTS</h2>
                        <!--<a href="" class="btn">Overview</a>-->
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Date</td>
                                <td>Name</td>
                                <td>Quantity</td>
                                <td>Vendor</td>
                                <td>Purpose</td>
                                <td>Receiver</td>
                                <td>Amount</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT prodate, proname, quantity, vendor, purpose, proamount, receiver FROM procurement ORDER BY proid DESC LIMIT 7";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td><?php echo $row['prodate'];?></td>
                                <td><?php echo $row['proname'];?></td>
                                <td><?php echo $row['quantity'];?></td>
                                <td><?php echo $row['vendor'];?></td>
                                <td><?php echo $row['purpose'];?></td>
                                <td><?php echo $row['receiver'];?></td>
                                <td><span class="status"><?php echo $row['proamount'];?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>
                        </tbody>
                    </table>
                </div>



                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>SCHOOLS</h2>
                       <!--<a href="" class="btn">View All</a>-->
                    </div>
                     <table>
                        <thead>
                            <tr>
                                <td>ENROLLED STUDENTS</td>
                                <td>LECTURERS</td>
                            </tr>
                        </thead>
                        <tbody>


                            <?php 
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $sql = "SELECT (SELECT COUNT(id) FROM `marriage`) AS mstudents, (SELECT COUNT(id) FROM lecturers) AS mglecturers,  (SELECT COUNT(id) FROM `biblestudents`) AS bstudents,  (SELECT COUNT(id) FROM `biblelecturers`) AS biblelecturers,  (SELECT COUNT(id) FROM `shepschool`) AS shepstudents,  (SELECT COUNT(id) FROM `shplecturers`) AS shplecturers,  (SELECT COUNT(id) FROM `minilead`) AS minilead,  (SELECT COUNT(id) FROM `mdlecturers`) AS mdlecturers";
                            $result = $conn-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_array())
                         {?>
                            <tr>
                                <td>MARRIAGE STUDENTS: <span class="status"><?php echo $row['mstudents'];?></span></td>
                                <td>MARRIAGE LECTURERS: <span class="status"><?php echo $row['mglecturers'];?></span></td>
                            </tr>
                            <tr>
                                <td>BIBLE STUDENTS: <span class="status"><?php echo $row['bstudents'];?></span></td>
                                <td>BIBLE LECTURERS: <span class="status"><?php echo $row['biblelecturers'];?></span></td>
                            </tr>
                            <tr>
                                <td>SHEPHERD STUDENTS: <span class="status"><?php echo $row['shepstudents'];?></span></td>
                                <td>SHEPHERD LECTURERS: <span class="status"><?php echo $row['shplecturers'];?></span></td>
                            </tr>
                            <tr>
                                <td>MINISTRY STUDENTS: <span class="status"><?php echo $row['minilead'];?></span></td>
                                <td>MINISTRY LECTURERS: <span class="status"><?php echo $row['mdlecturers'];?></span></td>
                            </tr>
                            <?php 
                                }
                                echo "</table>";
                                }else {
                                echo "0 result";
                                }
                                $conn-> close();     
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>






            <div class="details2">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Students Chart</h2>
                        <a href="" class="cbtn">Chart</a>
                    </div>
                    <div id="chart-container">
                        <canvas id="mycanvas"></canvas>
                        <?php require 'adminchart.php' ?>
                    </div>

                </div>

                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Gender</h2>
                        <a href="" class="cbtn">Chart</a>
                    </div>
                    <div id="chart-container2">
                        <canvas id="mycanvas2"></canvas>
                        <?php require 'adminchart.php' ?>
                    </div>
                </div>
            </div>

            <!--<div class="details2">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Chapels</h2>
                                <a href="" class="cbtn">Chart</a>
                    </div>
                    <div id="chart-container">
                        <canvas id="mycanvas3"></canvas>
                    </div>

                </div>

                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Revenue</h2>
                            <a href="" class="cbtn">Chart</a>
                    </div>
                    <div id="chart-container4">
                        <canvas id="mycanvas4"></canvas>
                        <?php require 'adminchart.php' ?>
                    </div>
                </div>

                <div class="recentCustomers">
                    <div class="cardHeader">
                    <h2>Expenses</h2>
                            <a href="" class="cbtn">Chart</a>
                    </div>
                    <div id="chart-container4">
                        <canvas id="mycanvas5"></canvas>
                        <?php require 'adminchart.php' ?>
                    </div>
                </div>

                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Offerings</h2>
                            <a href="" class="cbtn">Chart</a>
                    </div>
                    <div id="chart-container4">
                        <canvas id="mycanvas6"></canvas>
                        <?php require 'adminchart.php' ?>
                    </div>
                </div>
            </div>-->





        </div>
    </div>

    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script src="../jquery/Chart.min.js"></script>
    <script type="text/javascript" src="adminchart.js"></script>
    <script type="text/javascript" src="canvas5.js"></script>

</body>
<script src="adminboard.js"></script>

</html>