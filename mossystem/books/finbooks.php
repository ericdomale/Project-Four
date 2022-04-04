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
    <title>Books</title>
    <link rel="stylesheet" href="books.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../icons/Document/book-mark-line.svg" alt="logo" class="logo">
       <h2 class="heading">BOOKS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../finance/finance.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Record</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Add Book</div>
             <form action="finbookconnect.php" method="POST">
                 <div class="user-details">
                 <div class="input-box">
                         <span class="details">Book Title</span>
                         <input type="text" name="bktitle" id="bktitle" placeholder="Enter Title of Book" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Publication Status</span>
                         <select name="pubstatus" id="pubstatus">
                                 <option>--Select One--</option>
                                 <option name="firstpublic"  value="First Published">First Published</option>
                                 <option name="secondpublic" label="Second Published" value="Second Published"></option>
                                 <option name="thirdpublic" label="Third Published" value="Third Published"></option>
                                 <option name="fourthpublic" label="Fourth Published" value="Fourth Published"></option>
                                 <option name="fifthpublic" label="Fifth Published" value="Fifth Published"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Publication Date</span>
                         <input type="date" name="bkdate" id="bkdate" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Quantity Status</span>
                         <select name="quantity" id="quantity">
                                 <option>--Select One--</option>
                                 <option name="firstquantity"  value="First Quantity">First Quantity</option>
                                 <option name="secondquantity" label="Second Quantity" value="Second Quantity"></option>
                                 <option name="thirdquantity" label="Third Quantity" value="Third Quantity"></option>
                                 <option name="fourthquantity" label="Fourth Quantity" value="Fourth Quantity"></option>
                                 <option name="fifthquantity" label="Fifth Quantity" value="Fifth Quantity"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Quantity Number</span>
                         <input type="text" name="bktotal" id="bktotal" placeholder="Enter Number Published" required>
                     </div>
                     <div class="input-box">
                         <span class="details">ISBN Number</span>
                         <input type="text" name="isbn" id="isbn" placeholder="Enter ISBN Number" required>
                     </div>
                    
                     <div class="input-box">
                         <span class="details">Publication Cost</span>
                         <input type="text" name="pubcost" id="pubcost" placeholder="Enter Cost of Publication" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Retail Amount</span>
                         <input type="text" name="retamount" id="retamount" placeholder="Enter Amount for Retail" required>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Submit" name="book" id="bksubmit">
                      </div>
             </form>
         </div>


     </div>


     <a href="finbooksprint.php"><button id="show-login" name="show-login">Print</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>PUBLISHED</th>
                    <th>TITLE</th>
                    <th>STATUS</th>
                    <th>ISBN</th>
                    <th>QUANTITY</th>
                    <th>BOOK NUMBER</th>
                    <th>COST</th>
                    <th>AMOUNT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'finbooksdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>

    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="books.js"></script>
</html>