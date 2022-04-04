<?php /*session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
function load_names(){
    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');
    $output = '';
    $sql = "SELECT * FROM membership  WHERE cell= 'overcomers' ORDER BY memberno";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
        $output .= '<option value="'.$row["fullname"].'">'.$row["fullname"].'</option>';
    }
    return $output;
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overcomers</title>
    <link rel="stylesheet" href="overcomers.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../bicons/card-checklist.svg" alt="logo" class="logo">
       <h2 class="heading">OVERCOMERS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../shepherds/dataentry.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add</button></a>
       <!--<a href="#"><button  id="sho-login" name="sho-login">Attendance</button></a>-->
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Enter Cell Record</div>
             <form action="../entryconnection/overconnect.php" method="POST">
                 <div class="user-details">
                 <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="entrydate" id="entrydate">
                     </div>
                     <div class="input-box">
                         <span class="details">New Converts</span>
                         <input type="text" id="connumber" name="connumber" placeholder="Enter Number of New Converts">
                     </div>
                     <div class="input-box">
                         <span class="details">Choristers</span>
                         <input type="text" id="choristers" name="choristers" placeholder="Enter Number of Choristers">
                     </div>
                     <div class="input-box">
                         <span class="details">Preacher</span>
                         <input type="text" name="preacher" id="preacher" placeholder="Enter Name of Preacher">
                     </div>
                     <div class="input-box">
                         <span class="details">Message Preached</span>
                         <input type="text" name="message" id="message" placeholder="Enter Title of Message">
                     </div>
                     <div class="input-box">
                         <span class="details">Offering Amount</span>
                         <input type="text" name="ofamount" id="ofamount" placeholder="Enter Amount of Offering">
                     </div>
                     <div class="input-box">
                         <span class="details">Members</span>
                         <input type="text" name="members" id="members" placeholder="Enter Number of Members Attended">
                     </div>
                     <div class="input-box">
                         <span class="details">Names of Converts</span>
                         <textarea name="connames" id="connames" placeholder="Enter Names and Contacts of Converts" ></textarea>
                     </div>
                     <div class="input-boxs">
                         <span class="details">Attendance Check</span>
                         <select name="attended[]" id="attended" class="attended" multiple>
                             <option value="" name="attended[]" >--SELECT MEMBERS--</option>
                                <?php echo load_names(); ?>
                         </select>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Record" name="cellentry">
                      </div>
             </form>
         </div>

     </div>


     <!--<div class="viewmembers">
         <div class="close-btn">&times;</div>

         <div class="container">

         <td>
        <?php
        
        // $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");

         //$query = "SELECT attended FROM overcomersentry";
         //$update = mysqli_query($conn,$query);

         //while ($row = mysqli_fetch_array($update))
        // {
         //   echo $row['attended'];  
        // }
        

      ?>
      </td>
    </div>

     </div>-->


     <a href="overcomers.print.php"><button  id="show-login" name="show-login">Print</button></a>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>ATTENDANCE</th>
                    <th>PREACHER</th>
                    <th>MESSAGE</th>
                    <th>OFFERING</th>
                    <th>CONVERTS</th>
                    <th>CHORISTERS</th>
                    <th>EDIT</th>
                    <th>VIEW</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'overcomersdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>


      
    
</body>
<script src="overcomers.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html> 