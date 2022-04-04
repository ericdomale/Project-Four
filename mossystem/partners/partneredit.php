<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$partnerno = $_GET['partnerno'];

$query = "SELECT * FROM partners WHERE partnerno='$partnerno'";
$update = mysqli_query($conn,$query);

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
       <!--<img src="../icons/User/user-heart-line.svg" alt="logo" class="logo">
       <h2 class="heading">PARTNERS</h2>
       <nav>
           <ul class="nav_links">
               <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Partner</button></a>-->
       
     </header>


     <div class="pup">
         

         <div class="container">
             <div class="title">Registration</div>
             <form action="" method="POST">
             <?php while ($row = mysqli_fetch_array($update)) { ?>
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Partner ID</span>
                         <input type="text" id="partnerno" name="partnerno" value="<?php echo $row['partnerno'];?>">
                     </div>
                     <div class="input-box">
                         <span class="details">Full Name</span>
                         <input type="text" value="<?php echo $row['fullname'];?>" name="fullname" id="fullname" required>
                     </div>
                     <div class="input-box">
                         <span class="details">D.O.B</span>
                         <input type="date" value="<?php echo $row['partdate'];?>" name="partdate" id="partdate" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Gender</span>
                         <select name="gender" id="gender" class="gender" value="<?php echo $row['gender'];?>">
                                <option value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?></option>
                                 <option value="Male" name="male" class="male">Male</option>
                                 <option label="Female" value="female" name="female" class="female"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Status</span>
                         <select name="status" id="status" value="<?php echo $row['status'];?>">
                                 <option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
                                 <option name="Single"  value="Single">Single</option>
                                 <option name="Married" label="Married" value="Married"></option>
                                 <option name="Divorced" label="Divorced" value="Divorced"></option>
                                 <option name="Widow" label="Widow" value="Widow"></option>
                                 <option name="Widower" label="Widower" value="Widower"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Email</span>
                         <input type="email" name="email" id="email" value="<?php echo $row['email'];?>" >
                     </div>
                     <div class="input-box">
                         <span class="details">Contact Number</span>
                         <input type="text" value="<?php echo $row['contact'];?>" name="contact" id="contact" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Residential Address</span>
                         <input type="text" value="<?php echo $row['partaddress'];?>" name="partaddress" id="partaddress">
                     </div>
                     <div class="input-box">
                         <span class="details">G.P.S Address</span>
                         <input type="text" value="<?php echo $row['gpsaddress'];?>" name="gpsaddress" id="gpsaddress">
                     </div>
                     <div class="input-box">
                         <span class="details">Occupation</span>
                         <input type="text" value="<?php echo $row['work'];?>" name="work" id="work">
                     </div>
                     <div class="input-box">
                         <span class="details">Partner Since</span>
                         <input type="text" value="<?php echo $row['since'];?>" name="since" id="since" required>
                     </div>
                 </div>
                      <div class="button">
                      <input type="submit" value="Add Partner" name="edited" id="submit">
                      </div>
                      <?php } ?>
             </form>
         </div>

     </div>

     <?php 
                    if (isset($_POST['edited']))
                    {
                        $partnerno = $_POST['partnerno'];
                        $fullname = $_POST['fullname'];
                        $partdate = $_POST['partdate'];
                        $gender = $_POST['gender'];
                        $status = $_POST['status'];
                        $email = $_POST['email'];
                        $contact = $_POST['contact'];
                        $partaddress = $_POST['partaddress'];
                        $gpsaddress = $_POST['gpsaddress'];
                        $work = $_POST['work'];
                        $since = $_POST['since'];
                    

                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `partners` SET partnerno='$_POST[partnerno]',fullname='$_POST[fullname]',partdate='$_POST[partdate]',gender='$_POST[gender]',status='$_POST[status]',email='$_POST[email]',contact='$_POST[contact]',partaddress='$_POST[partaddress]',gpsaddress='$_POST[gpsaddress]',work='$_POST[work]',since='$_POST[since]' WHERE partnerno='$partnerno'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Details Updated";
                             header('location:partners.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:partners.php'); 
                         }
                    
                        echo "<script>window.location.href='partners.php'</script>";

                    }


                    ?>


   
    
</body>
<script src="partners.js"></script>
<script src="../jquery/datatables.js"></script>
<script src="../jquery/jquery.dataTables.min.js"></script>
</html>