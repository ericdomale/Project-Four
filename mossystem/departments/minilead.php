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
    <title>School of Ministry & Discipleship</title>
    <link rel="stylesheet" href="minilead.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>

<body>

    <header>
        <img src="../bicons/coin.svg" alt="logo" class="logo">
        <h2 class="heading">SCHOOL OF MINISTRY & DISCIPLESHIP</h2>
        <nav>
            <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/ ?></a></li>-->
                <li><a href="../schools/schools.php" class="person"><img src="../icons/Buildings/home-4-line.svg"
                            alt=""></a></li>
                <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
            </ul>
        </nav>

        <a href="#"><button id="show-login" name="show-login"></button></a>

    </header>


    <div class="popup">
        <div class="close-btn">&times;</div>

        <div class="container">
            <div class="title">Add Student</div>
            <form action="minileadcon.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Enrol ID</span>
                        <input type="text" id="erlid" name="erlid" placeholder="Enter ID of Student">
                    </div>
                    <div class="input-box">
                        <span class="details">Student Name</span>
                        <input type="text" name="fullname" id="fullname" placeholder="Enter Name of Student">
                    </div>
                    <div class="input-box">
                        <span class="details">Date of Birth</span>
                        <input type="date" name="bdate" id="bdate" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Enrol Date</span>
                        <input type="date" name="erldate" id="erldate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Program Duration</span>
                        <input type="text" name="duration" id="duration" placeholder="Enter Program Duration" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Start Date</span>
                        <input type="date" name="startdate" id="startdate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">End Date</span>
                        <input type="date" name="enddate" id="enddate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Month</span>
                        <select name="erlmonth" id="erlmonth">
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
                        <span class="details">Contact</span>
                        <input type="text" name="contact" id="contact" required placeholder="Enter Contact">
                    </div>
                    <div class="input-box">
                        <span class="details">Res.Address/GPS</span>
                        <input type="text" name="maddress" id="maddress" required placeholder="Enter Address">
                    </div>
                    <div class="input-box">
                        <span class="details">Current Status</span>
                        <select name="cstatus" id="cstatus">
                            <option>--Select One--</option>
                            <option value="Church Member">Church Member</option>
                            <option label="Non-member" value="Non-member"></option>
                        </select>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="mstudent" id="mstudent">
                </div>
            </form>
        </div>

    </div>




    <div class="spopup">
        <div class="close-btn">&times;</div>

        <div class="container">
            <div class="title">Add Lecturer</div>
            <form action="minileadlect.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Lecturer ID</span>
                        <input type="text" id="ltid" name="ltid" placeholder="Enter ID" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date Appointed</span>
                        <input type="date" name="appdate" id="appdate" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Department</span>
                        <select name="school" id="school">
                            <option>--Select One--</option>
                            <option name="marriage" value="School of Marriage">School of Marriage</option>
                            <option name="shepherds" label="Shepherds School" value="Shepherds School"></option>
                            <option name="bible" label="Bible School" value="Bible School"></option>
                            <option name="ministry" label="Ministry/Discipleship" value="Ministry/Discipleship">
                            </option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Qualification</span>
                        <input type="text" name="qualify" id="qualify" required placeholder="Enter Qualifications">
                    </div>
                    <div class="input-box">
                        <span class="details">Trainings Attended</span>
                        <input type="text" name="trainings" id="trainings" required
                            placeholder="Enter Trainings Attended">
                    </div>
                    <div class="input-box">
                        <span class="details">Status</span>
                        <select name="lectstatus" id="lectstatus">
                            <option>--Select One--</option>
                            <option name="partime" value="Part-Time">Part-Time</option>
                            <option name="fulltime" label="Full-Time" value="Full-Time"></option>
                            <option name="visiting" label="Visiting" value="Visiting"></option>
                            <option name="volunteer" label="Volunteer" value="Volunteer"></option>
                        </select>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="lecturer" id="lecturer">
                </div>
            </form>
        </div>

    </div>




    <div class="jpopup">
        <div class="close-btn">&times;</div>

        <div class="container">
            <div class="title">Add Joint</div>
            <form action="jointitheconnect.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Dean ID</span>
                        <input type="text" id="deanid" name="deanid" placeholder="Enter ID" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Name of Dean</span>
                        <input type="text" placeholder="Enter Full Name" name="deaname" id="deaname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Faculty</span>
                        <select name="school" id="school">
                            <option>--Select One--</option>
                            <option name="marriage" value="School of Marriage">School of Marriage</option>
                            <option name="shepherds" label="Shepherds School" value="Shepherds School"></option>
                            <option name="bible" label="Bible School" value="Bible School"></option>
                            <option name="ministry" label="Ministry/Discipleship" value="Ministry/Discipleship">
                            </option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Students</span>
                        <input type="text" placeholder="Enter No of Students" name="studnumber" id="studnumber"
                            required>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact</span>
                        <input type="text" name="contact" id="contact" placeholder="Enter Contact" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Venue</span>
                        <input type="text" name="venue" id="venue" placeholder="Enter Venue" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Enrollment Fee</span>
                        <input type="text" name="fee" id="fee" placeholder="Enter Fee" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="depart" id="depart">
                </div>
            </form>
        </div>

    </div>


    <button class="tablink" onclick="openPage('Students', this,'white')">STUDENTS</button>
    <button class="tablink" onclick="openPage('Lecturers', this, 'white')">LECTURERS<button>
    <button class="tablink" onclick="openPage('Department', this, 'white')" id="active">DEPARTMENT</button>



            <div id="Students" class="tabcontent">
                <div class="containero">
                    <a href="#"><button id="overalltab" name="overalltab" class="overalltab">Add
                            Student</button></a><br>
                    <div class="table-responsive">
                        <table class="contentable" id="contable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>FULLNAME</th>
                                    <th>ENROL DATE</th>
                                    <th>DURATION</th>
                                    <th>START DATE</th>
                                    <th>END DATE</th>
                                    <th>CONTACT</th>
                                    <th>STATUS</th>
                                    <th>ADDRESS</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require 'minileadisplay.php' ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div id="Lecturers" class="tabcontent">
                <div class="containero">
                    <a href="#"><button id="indietab" name="indietab" class="indietab">Add Lecturer</button></a><br>
                    <div class="table-responsive">
                        <table class="contentable" id="indietable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>FULLNAME</th>
                                    <th>APPOINTED</th>
                                    <th>DEPARTMENT</th>
                                    <th>QUALIFICATIONS</th>
                                    <th>TRAININGS</th>
                                    <th>STATUS</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require 'mdlecturerdisplay.php' ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div id="Department" class="tabcontent">
                <div class="containero">
                    <a href="#"><button id="jointab" name="jointab" class="jointab"></button></a><br>
                    <div class="dashcontainer">
                        <div class="row">
                            <div class="column">

                                <label for="name"><img src="icon/medal-line.svg" alt="">TOTAL NUMBER OF
                                    STUDENTS:</label><br>
                                <label for="name">
                                    <?php

                    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                    $query = "SELECT id FROM minilead";
                    $query_run = mysqli_query($conn,$query);

                    $row = mysqli_num_rows($query_run);

                    echo $row;
                    ?>
                                </label>
                            </div>
                            <div class="column">
                                <label for="amount"><img src="icon/funds-line.svg" alt="">TOTAL NUMBER OF 
                                    LECTURERS:</label><br>
                                <label for="amount">
                                    <?php
                            $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

                            $query = "SELECT id FROM mdlecturers";
                            $query_run = mysqli_query($conn,$query);
        
                            $row = mysqli_num_rows($query_run);
        
                            echo $row;
                           ?>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <label for="paid"><img src="icon/secure-payment-fill.svg" alt="">PERIOD DURATION:</label><br>
                                <label for="paid">
                                    <?php
                            //$conn = mysqli_connect('127.0.0.1:3307','root','','receipt');

                            //$query = "SELECT SUM(paid) AS sum FROM `pledgetable`";
                            //$query_run = mysqli_query($conn, $query);

                            //while($row = mysqli_fetch_array($query_run)){

                                //$output = 'GHS '.number_format($row['sum']);

                            //}; 
                           ?>
                                    <?php //echo $output; ?>
                                </label>
                            </div>
                            <!--<div class="column">
                                <label for="balance"><img src="icon/swap-line.svg" alt="">TOTAL AMOUNT
                                    OUTSTANDING:</label><br>
                                <label for="balance">
                                    <?php
                            //$conn = mysqli_connect('127.0.0.1:3307','root','','receipt');

                            //$query = "SELECT SUM(balance) AS sum FROM `pledgetable`";
                            //$query_run = mysqli_query($conn, $query);

                            //while($row = mysqli_fetch_array($query_run)){

                                //$output = 'GHS '.number_format($row['sum']);

                           // }; 
                           ?>
                                    <?php //echo $output; ?>
                                </label>
                            </div>-->
                        </div>
                    </div>

                </div>

            </div>






            <script src="../jquery/datatables.js"></script>
            <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="minilead.js"></script>


</html>