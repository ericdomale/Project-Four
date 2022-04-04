<?php
  $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

  $query = "SELECT ( SELECT COUNT(id) FROM marriage) AS Marriage, ( SELECT COUNT(id) FROM biblestudents) AS Bible, ( SELECT COUNT(id) FROM shepschool) AS Shepherd, ( SELECT COUNT(id) FROM minilead) AS Ministry";
  $query_run = mysqli_query($conn,$query);

  if (mysqli_num_rows($query_run) >= 1)
  {
     while ($row = mysqli_fetch_assoc($query_run))
      { ?>
         <tr>
         <input type='hidden' id='Marriage' value ="<?php echo $row['Marriage'];?>">
         <input type='hidden' id='Bible' value ="<?php echo $row['Bible'];?>">
         <input type='hidden' id='Shepherd' value ="<?php echo $row['Shepherd'];?>">
         <input type='hidden' id='Ministry' value ="<?php echo $row['Ministry'];?>">  
         </tr>
         <?php 
         
     }
  }
  else{
     echo "Something wrong";
  }
 
 ?>



<?php 
 $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

 $query = "SELECT ( SELECT COUNT(memberno) FROM membership WHERE gender = 'male' ) AS Male, ( SELECT COUNT(memberno) FROM membership WHERE gender = 'female' ) AS Female";
 $query_run = mysqli_query($conn,$query);

  if (mysqli_num_rows($query_run) >= 1)
  {
     while ($row = mysqli_fetch_assoc($query_run))
      { ?>
         <tr>
         <input type='hidden' id='Male' value ="<?php echo $row['Male'];?>">
         <input type='hidden' id='Female' value ="<?php echo $row['Female'];?>">
         </tr>
         <?php 
         
     }
  }
  else{
     echo "Something wrong";
  }

?>



<?php 
/*$conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

$query = "SELECT ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'January' ) AS January,
          ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'February' ) AS February,
          ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'March' ) AS March,
          ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'April' ) AS April,
          ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'May' ) AS May,
          ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'June' ) AS June,
          ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'July' ) AS July,
          ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'August' ) AS August,
          ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'September' ) AS September,
          ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'October' ) AS October,
          ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'November' ) AS November,
          ( SELECT SUM(revamount) FROM tithes WHERE titmonth = 'December' ) AS December";
 $query_run = mysqli_query($conn,$query);
 while($row = mysqli_fetch_array($query_run)){

   ?>
<input type='hidden' id='January' value ="<?php echo $row['January'];?>">
<input type='hidden' id='February' value ="<?php echo $row['February'];?>">
<input type='hidden' id='March' value ="<?php echo $row['March'];?>">
<input type='hidden' id='April' value ="<?php echo $row['April'];?>">
<input type='hidden' id='May' value ="<?php echo $row['May'];?>">
<input type='hidden' id='June' value ="<?php echo $row['June'];?>">
<input type='hidden' id='July' value ="<?php echo $row['July'];?>">
<input type='hidden' id='August' value ="<?php echo $row['August'];?>">
<input type='hidden' id='September' value ="<?php echo $row['September'];?>">
<input type='hidden' id='October' value ="<?php echo $row['October'];?>">
<input type='hidden' id='November' value ="<?php echo $row['November'];?>">
<input type='hidden' id='December' value ="<?php echo $row['December'];?>">
<?php
 
};
?>


<?php 
$conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

$query = "SELECT ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Sunday Service' ) AS Sunday,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Thanksgiving Service' ) AS Thanksgiving,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Anointing Service' ) AS Anointing,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Special Service' ) AS Special,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Tuesday Service' ) AS Tuesday,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Friday Night Service' ) AS Friday";
 $query_run = mysqli_query($conn,$query);
 while($row = mysqli_fetch_array($query_run)){

   ?>
<input type='hidden' id='Sunday' value ="<?php echo $row['Sunday'];?>">
<input type='hidden' id='Thanksgiving' value ="<?php echo $row['Thanksgiving'];?>">
<input type='hidden' id='Anointing' value ="<?php echo $row['Anointing'];?>">
<input type='hidden' id='Special' value ="<?php echo $row['Special'];?>">
<input type='hidden' id='Tuesday' value ="<?php echo $row['Tuesday'];?>">
<input type='hidden' id='Friday' value ="<?php echo $row['Friday'];?>">
<?php
 
}; 
?>




<?php 

$conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

$query = "SELECT ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'January' ) AS january1,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'February' ) AS february2,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'March' ) AS march3,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'April' ) AS april4,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'May' ) AS may5,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'June' ) AS june6,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'July' ) AS july7,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'August' ) AS august8,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'September' ) AS september9,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'October' ) AS october10,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'November' ) AS november11,
          ( SELECT SUM(expamount) FROM expenses WHERE expmonth = 'December' ) AS december12";
          $query_run = mysqli_query($conn,$query);
          while($row = mysqli_fetch_array($query_run)){
         
            ?>
         <input type='hidden' id='january1' value ="<?php echo $row['january1'];?>">
         <input type='hidden' id='february2' value ="<?php echo $row['february2'];?>">
         <input type='hidden' id='march3' value ="<?php echo $row['march3'];?>">
         <input type='hidden' id='april4' value ="<?php echo $row['april4'];?>">
         <input type='hidden' id='may5' value ="<?php echo $row['may5'];?>">
         <input type='hidden' id='june6' value ="<?php echo $row['june6'];?>">
         <input type='hidden' id='july7' value ="<?php echo $row['july7'];?>">
         <input type='hidden' id='august8' value ="<?php echo $row['august8'];?>">
         <input type='hidden' id='september9' value ="<?php echo $row['september9'];?>">
         <input type='hidden' id='october10' value ="<?php echo $row['october10'];?>">
         <input type='hidden' id='november11' value ="<?php echo $row['november11'];?>">
         <input type='hidden' id='december12' value ="<?php echo $row['december12'];?>">
         <?php
          
         }; 

?> */