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
    <title>Announcements</title>
    <link rel="stylesheet" href="announce.css">
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../jquery/datatables.css">   
</head>
<body>

     <header>
       <img src="../bicons/bell.svg" alt="logo" class="logo">
       <h2 class="heading2">ANNOUNCEMENTS</h2>
       <nav>
           <ul class="nav_links">
               <!--<li><a href="#">Welcome, <?php /*echo $_SESSION['username'];*/?></a></li>-->
               <li><a href="../overseer/overseer.php" class="person"><img src="../icons/Buildings/home-4-line.svg" alt=""></a></li>
               <!--<li><a href="#" class="person" id="person"><img src="../bicons/person-circle.svg" alt=""></a></li>-->
           </ul>
       </nav>
       
       <a href="#"><button  id="show-login" name="show-login">-</button></a>
       
     </header>


     <div class="popup">
         <div class="close-btn">&times;</div>

         <div class="container">
             <div class="title">Announce</div>
             <form action="annconnect.php" method="POST">
                 <div class="user-details">
                 <div class="input-box">
                         <span class="details">Date</span>
                         <input type="date" name="anndate" id="anndate" required>
                     </div>
                     <div class="input-box">
                         <span class="details">Type</span>
                         <select name="anntype" id="anntype">
                                 <option>--Select One--</option>
                                 <option name="Celebration"  value="Celebration">Celebration</option>
                                 <option name="Meeting" label="Meeting" value="Meeting"></option>
                                 <option name="Ceremonial" label="Ceremonial" value="Ceremonial"></option>
                                 <option name="Mourning" label="Mourning" value="Widow"></option>
                                 <option name="Others" label="Others" value="Others"></option>
                         </select>
                     </div>
                     <div class="input-box">
                         <span class="details">Enter Info</span>
                          <textarea name="anninfo" id="anninfo" cols="30" rows="10"></textarea>
                     </div>
                 </div>
                      <div class="button">
                          <input type="submit" value="Add Information" name="announce">
                      </div>
             </form>
         </div>

     </div>

     <a href="announce.php"><button id="show-login" name="show-login">Back</button></a><br>
     <div class="containero">
        <div class="table-responsive">
            <table class="contentable" id="contable">
          <thead>
                <tr>
                    <th>DATE</th>
                    <th>TYPE</th>
                    <th>INFORMATION</th>
                </tr>
            </thead>
            <tbody>
               <?php require 'annprintdisplay.php' ?>
            </tbody>
     </table>
        </div>
    </div>   


     <script src="../jquery/datatables.js"></script>
    
     <script>

$(document).ready(function(){

$('#contable').DataTable({
 "processing" : true,
 "serverSide" : true,
 "ajax" : {
      url:"annfetch.php",
      type:"POST"
     },
 dom: 'lBfrtip',
 buttons: [
  'excel', 'pdf'
 ],
 "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ]
});

});

</script>
</body>
<script src="announce.js"></script>
</html>