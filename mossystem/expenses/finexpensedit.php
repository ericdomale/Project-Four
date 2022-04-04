<?php session_start();
if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}

$conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
$expid = $_GET['expid'];

$query = "SELECT * FROM expenses WHERE expid='$expid'";
$update = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses</title>
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
    <link rel="stylesheet" href="expenses.css">
  
</head>
<body>

     <header>
       <!--<img src="../icons/Finance/funds-line.svg" alt="logo" class="logo">
       <h2 class="heading">EXPENSES</h2>
       <nav>
           <ul class="nav_links">
               <li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Expense</button></a>-->
       
     </header>


     <div class="pup">
         

         <div class="container">
             <div class="title">Add Record</div>
             <form action="" method="POST">
             <?php while ($row = mysqli_fetch_array($update)) { ?>
                 <div class="user-details">
                     
                     <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="expdate" id="expdate" value="<?php echo $row['expdate'];?>" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Month</span>
                         <select name="expmonth" id="expmonth" value="<?php echo $row['expmonth'];?>">
                           <option value="<?php echo $row['expmonth'];?>"><?php echo $row['expmonth'];?></option>
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
                         <span class="details">Expense</span>
                         <input type="text" name="expname" id="expname" value="<?php echo $row['expname'];?>" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Category</span>
                         <select name="expgory" id="expgory" value="<?php echo $row['expgory'];?>" required>
                           <option value="<?php echo $row['expgory'];?>"><?php echo $row['expgory'];?></option>
                           <option label="Fuel" value="Fuel"></option>
                           <option label="Sundry" value="Sundry"></option>
                           <option label="Salaries" value="Salaries"></option>
                           <option label="Internet" value="Internet"></option>
                           <option label="Air Condition" value="Air Condition"></option>
                           <option label="Office Stationery" value="Office Stationery"></option>
                           <option label="General Maintenance" value="General Maintenance"></option>
                           <option label="Communion" value="Communion"></option>
                           <option label="Phone Bills" value="Phone Bills"></option>
                           <option label="Water" value="Water"></option>
                           <option label="Others" value="Others"></option>
                       </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Payment Method</span>
                         <select name="paytm" id="paytm" value="<?php echo $row['paytm'];?>" required>
                           <option value="<?php echo $row['paytm'];?>"><?php echo $row['paytm'];?></option>
                           <option label="Cash" value="Cash"></option>
                           <option label="Mobile Money" value="Mobile Money"></option>
                           <option label="Bank Transfer" value="Bank Transfer"></option>
                           <option label="Debit Card" value="Debit Card"></option>
                           <option label="Bank Deposit" value="Bank Deposit"></option>
                       </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Amount</span>
                         <input type="text" name="expamount" id="expamount" value="<?php echo $row['expamount'];?>" required>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Submit" name="edited" id="expsubmit">
                     </div>
             <?php } ?>
             </form>
         </div>


     </div>

    

     <?php 
                    if (isset($_POST['edited']))
                    {
                        $expdate = $_POST['expdate'];
                        $expmonth = $_POST['expmonth'];
                        $expname = $_POST['expname'];
                        $expgory = $_POST['expgory'];
                        $paytm = $_POST['paytm'];
                        $expamount = $_POST['expamount'];

                        


                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem"); 
                        $query = "UPDATE `expenses` SET expdate='$_POST[expdate]',expmonth='$_POST[expmonth]',expname='$_POST[expname]',expgory='$_POST[expgory]',paytm='$_POST[paytm]',expamount='$_POST[expamount]' WHERE expid='$expid'";
                        $queryrun = mysqli_query($conn,$query);

                         if ($queryrun)
                         {
                             $_SESSION['success'] ="Details Updated";
                             header('location:finexpenses.php');
                         }else
                         {
                             $_SESSION['status'] ="Details Not Updated";
                             header('location:finexpenses.php'); 
                         }
                    
                        echo "<script>window.location.href='finexpenses.php'</script>";

                    }


                    ?>
    

    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="expenses.js"></script>


</html>