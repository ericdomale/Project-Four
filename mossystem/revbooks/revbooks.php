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
    <title>Pastor's Books</title>
    <link rel="stylesheet" href="revbooks.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">
</head>
<body>

     <header>
       <img src="../icons/Document/booklet-fill.svg" alt="logo" class="logo">
       <h2 class="heading">PASTOR'S BOOKS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">Add Record</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Add Book</div>
             <form action="revbookconnect.php" method="POST">
                 <div class="user-details">
                     <div class="input-box">
                         <span class="details">Book Title</span>
                         <input type="text" name="revtitle" id="revtitle"  placeholder="Enter Book Title" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Publication Date</span>
                         <input type="date" name="revdate" id="revdate" required>
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
                         <span class="details">ISBN Number</span>
                         <input type="text" name="isbn" id="isbn" placeholder="Enter ISBN Number" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Quantity Published</span>
                         <input type="text" name="quantity" id="quantity" placeholder="Enter Quantity Published" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Editors</span>
                         <input type="text" name="editors" id="editors" placeholder="Enter Name of Editor" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Publication House</span>
                         <input type="text" name="pubhouse" id="pubhouse" placeholder="Enter Name of Publication House" required>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Submit" name="revbook" id="revbook">
                      </div>
             </form>
         </div>

     </div>


     <a href="revprint.php"><button  id="show-login" name="show-login">Print</button></a>
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
                    <th>EDITORS</th>
                    <th>PUBLICATION HOUSE</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'revbooksdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>


    <script src="../jquery/datatables.js"></script>
    <script src="../jquery/jquery.dataTables.min.js"></script>
</body>
<script src="revbooks.js"></script>
</html>