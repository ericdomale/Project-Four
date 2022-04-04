<?php
/*session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$id = $_GET['id'];

$query = "SELECT * FROM wellspring WHERE id='$id'";
$update = mysqli_query($conn,$query);

 ?>

<?php 
function load_names(){
    $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');
    $output = '';
    $sql = "SELECT * FROM membership  WHERE cell= 'Wellspring' ORDER BY memberno";
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
    <title>Wellspring</title>
    <link rel="stylesheet" href="wellspring.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <!--<img src="../bicons/people.svg" alt="logo" class="logo">
       <h2 class="heading">OVERCOMERS</h2>
       <nav>
           <ul class="nav_links">
               <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
               <li><a href="../shepherds/dataentry.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add</button></a>
       <a href="#"><button  id="sho-login" name="sho-login">Attendance</button></a>-->
       
     </header>


     <div class="pup">

         <div class="container">
             <div class="title">Edit Record</div>
             <form action="" method="POST">
             <?php while ($row = mysqli_fetch_array($update)) { ?>
                 <div class="user-details">
                 <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="entrydate" id="entrydate" value="<?php echo $row['entrydate'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">New Converts</span>
                         <input type="text" id="connumber" name="connumber" value="<?php echo $row['connumber'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Choristers</span>
                         <input type="text" id="choristers" name="choristers" value="<?php echo $row['choristers'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Preacher</span>
                         <input type="text" name="preacher" id="preacher" value="<?php echo $row['preacher'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Message Preached</span>
                         <input type="text" name="message" id="message" value="<?php echo $row['message'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Offering Amount</span>
                         <input type="text" name="ofamount" id="ofamount" value="<?php echo number_format($row['ofamount']);?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Members</span>
                         <input type="text" name="members" id="members" value="<?php echo $row['members'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Names of Converts</span>
                         <textarea name="connames" id="connames"><?php echo $row['connames'];?></textarea>
                     </div>
                     <div class="input-boxs">
                         <span class="details">Attendance Check</span>
                         <select name="attended[]" id="attended" class="attended" multiple>
                             <option value="" name="attended[]">--SELECT MEMBERS--</option>
                             <?php echo load_names();?>
                         </select>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Record" name="edited">
                      </div>
                      <?php } ?>
             </form>
         </div>

     </div>



     <?php 
                    if (isset($_POST['edited']))
                    {
                        $entrydate = $_POST['entrydate'];
                        $connumber = $_POST['connumber'];
                        $choristers = $_POST['choristers'];
                        $preacher = $_POST['preacher'];
                        $message = $_POST['message'];
                        $ofamount = $_POST['ofamount'];
                        $members = $_POST['members'];
                        $connames = $_POST['connames'];
                        $attended =  implode('<br>', $_POST['attended']);

                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `wellspring` SET entrydate='$_POST[entrydate]',connumber='$_POST[connumber]',choristers='$_POST[choristers]',preacher='$_POST[preacher]',message='$_POST[message]',ofamount='$_POST[ofamount]',members='$_POST[members]',connames='$_POST[connames]',attended='$attended' WHERE id='$id'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                        { /*
                             $_SESSION['success'] ="Details Updated";
                             header('location:overcomers.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:overcomers.php'); 
                         */}
                    
                        echo "<script>window.location.href='wellspring.php'</script>";

                    }


                    ?>

    
</body>
<script src="wellspring.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html> 