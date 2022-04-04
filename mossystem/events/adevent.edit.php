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
<?php
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$eventid = $_GET['eventid'];

$query = "SELECT * FROM events WHERE eventid='$eventid'";
$update = mysqli_query($conn,$query);

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
       <!--<img src="../bicons/pin-map-fill.svg" alt="logo" class="logo">
       <h2 class="heading">EVENTS</h2>
       <nav>
           <ul class="nav_links">
                <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Event</button></a>-->
       
     </header>


     <div class="pup">

         <div class="container">
             <div class="title">Edit Details</div>
             <form action="" method="POST">
             <?php while ($row = mysqli_fetch_array($update)) { ?>
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" placeholder="Enter Date" name="eventdate" value="<?php echo $row['eventdate'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Event Name</span>
                         <input type="text" placeholder="Enter Event Name" name="eventname" value="<?php echo $row['eventname'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Venue</span>
                         <input type="text" placeholder="Enter Venue" name="eventvenue" value="<?php echo $row['eventvenue'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Kind of Event</span>
                         <select name="eventkind" id="eventkind" class="eventkind" value="<?php echo $row['eventkind'];?>">
                                <option value="<?php echo $row['eventkind'];?>"><?php echo $row['eventkind'];?></option>
                                 <?php echo load_event(); ?>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Type</span>
                         <select name="eventype" id="eventype" value="<?php echo $row['eventype'];?>">
                                 <option><?php echo $row["eventype"];?></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Dress Code</span>
                         <select name="dresscode" id="dresscode" class="dresscode" value="<?php echo $row['dresscode'];?>">
                                <option value="<?php echo $row['dresscode'];?>"><?php echo $row['dresscode'];?></option>
                                 <option value="Casual" name="Casual">Casual</option>
                                 <option label="Smart Casual" value="Smart Casual" name="Smart Casual"></option>
                                 <option label="Strictly Official" value="Strictly Official" name="Strictly Official"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Event Colours</span>
                         <input type="text" placeholder="Enter Colours" name="eventcolours" value="<?php echo $row['eventcolours'];?>">
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Event" name="edited">
                      </div>
             <?php } ?>
             </form>
         </div>

     </div>


     <?php 
                    if (isset($_POST['edited']))
                    {
                        $eventdate = $_POST['eventdate'];
                        $eventname = $_POST['eventname'];
                        $eventvenue = $_POST['eventvenue'];
                        $eventkind = $_POST['eventkind'];
                        $eventype = $_POST['eventype'];
                        $dresscode = $_POST['dresscode'];
                        $eventcolours = $_POST['eventcolours'];

                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `events` SET eventdate='$_POST[eventdate]',eventname='$_POST[eventname]',eventvenue='$_POST[eventvenue]',eventkind='$_POST[eventkind]',eventype='$_POST[eventype]',dresscode='$_POST[dresscode]',eventcolours='$_POST[eventcolours]' WHERE eventid='$_POST[eventid]'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Details Updated";
                             header('location:adevents.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:adevents.php'); 
                         }
                    
                        echo "<script>window.location.href='adevents.php'</script>";

                    }


                    ?>

    
</body>
<script src="event.edit.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html>