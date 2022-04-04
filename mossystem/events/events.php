<?php /*session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/

function load_event(){
    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');
    $output = '';
    $sql = "SELECT * FROM eventable ORDER BY kindno";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
        $output .= '<option value="'.$row["kindno"].'">'.$row["kindname"].'</option>';
    }
    return $output;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="events.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../bicons/pin-map-fill.svg" alt="logo" class="logo">
       <h2 class="heading">EVENTS</h2>
       <nav>
           <ul class="nav_links">
                <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Event</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Enter Info</div>
             <form action="eventconnect.php" method="POST">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" placeholder="Enter Date" name="eventdate">
                     </div>
                     <div class="input-box">
                         <span class="details">Event Name</span>
                         <input type="text" placeholder="Enter Event Name" name="eventname">
                     </div>
                     <div class="input-box">
                         <span class="details">Venue</span>
                         <input type="text" placeholder="Enter Venue" name="eventvenue">
                     </div>
                     <div class="input-box">
                         <span class="details">Kind of Event</span>
                         <select name="eventkind" id="eventkind" class="eventkind">
                                <option>--Select One--</option>
                                 <?php echo load_event(); ?>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Type</span>
                         <select name="eventype" id="eventype">
                                 <option>--Select One--</option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Dress Code</span>
                         <select name="dresscode" id="dresscode" class="dresscode">
                                <option>--Select One--</option>
                                 <option value="Casual" name="Casual">Casual</option>
                                 <option label="Smart Casual" value="Smart Casual" name="Smart Casual"></option>
                                 <option label="Strictly Official" value="Strictly Official" name="Strictly Official"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Event Colours</span>
                         <input type="text" placeholder="Enter Colours" name="eventcolours">
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Event" name="addevent">
                      </div>
             </form>
         </div>

     </div>

     <a href="event.print.php"><button id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
                <thead>
                    <tr>
                        <th>DATE</th>
                        <th>NAME</th>
                        <th>VENUE</th>
                        <th>KIND</th>
                        <th>TYPE</th>
                        <th>DRESSCODE</th>
                        <th>COLOURS</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require 'eventdisplay.php' ?>
                </tbody>
            </table>
        </div>
    </div>

    
</body>
<script src="events.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html>