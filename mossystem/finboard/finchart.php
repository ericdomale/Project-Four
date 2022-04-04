<!--CELL OFFERINGS-->

<?php 

$conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

$query = "SELECT ( SELECT SUM(ofamount) FROM overcomersentry) AS Overcomers,
          ( SELECT SUM(ofamount) FROM opheavens) AS OpenHeavens,
          ( SELECT SUM(ofamount) FROM breakthrough) AS Breakthrough,
          ( SELECT SUM(ofamount) FROM breadoflife) AS BreadofLife,
          ( SELECT SUM(ofamount) FROM dunamis) AS Dunamis,
          ( SELECT SUM(ofamount) FROM wellspring) AS Wellspring,
          ( SELECT SUM(ofamount) FROM passion) AS Passion,
          ( SELECT SUM(ofamount) FROM holyhill) AS HolyHill,
          ( SELECT SUM(ofamount) FROM morningstar) AS MorningStar,
          ( SELECT SUM(ofamount) FROM goodshepherd) AS GoodShepherd";
          $query_run = mysqli_query($conn,$query);
          while($row = mysqli_fetch_array($query_run)){
         
            ?>
         <input type='hidden' id='Overcomers' value ="<?php echo $row['Overcomers'];?>">
         <input type='hidden' id='OpenHeavens' value ="<?php echo $row['OpenHeavens'];?>">
         <input type='hidden' id='Breakthrough' value ="<?php echo $row['Breakthrough'];?>">
         <input type='hidden' id='BreadofLife' value ="<?php echo $row['BreadofLife'];?>">
         <input type='hidden' id='Dunamis' value ="<?php echo $row['Dunamis'];?>">
         <input type='hidden' id='Wellspring' value ="<?php echo $row['Wellspring'];?>">
         <input type='hidden' id='Passion' value ="<?php echo $row['Passion'];?>">
         <input type='hidden' id='HolyHill' value ="<?php echo $row['HolyHill'];?>">
         <input type='hidden' id='MorningStar' value ="<?php echo $row['MorningStar'];?>">
         <input type='hidden' id='GoodShepherd' value ="<?php echo $row['GoodShepherd'];?>">
         <?php
          
         }; 

?>





<!--MONETARY-->
<?php
  $conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

  $query = "SELECT ( SELECT SUM(ofamount) FROM offerings) AS Offerings, ( SELECT SUM(titamount) FROM tithes) AS Tithes, ( SELECT SUM(expamount) FROM expenses) AS Expenses, ( SELECT SUM(pdgamount) FROM pledges) AS Pledges";
  $query_run = mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($query_run)){
     ?>
         <tr>
         <input type='hidden' id='Offerings' value ="<?php echo $row['Offerings'];?>">
         <input type='hidden' id='Tithes' value ="<?php echo $row['Tithes'];?>">
         <input type='hidden' id='Expenses' value ="<?php echo $row['Expenses'];?>">
         <input type='hidden' id='Pledges' value ="<?php echo $row['Pledges'];?>">  
         </tr>
         <?php 
  };
 
 ?>


<?php 
 $conn = mysqli_connect('127.0.0.1:3307','root','','giwcdata');

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



<!--TITHES-->
<?php 
$conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

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
          ( SELECT SUM(titamount) FROM tithes WHERE titmonth = 'December' ) AS December";
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


<!--SERVICES-->

<?php 
$conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

$query = "SELECT ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Empowerment Service' ) AS Empowerment,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Armour Service' ) AS Armour,
          ( SELECT SUM(ofamount) FROM offerings WHERE offprogram = 'Missiles Service' ) AS Missiles";
 $query_run = mysqli_query($conn,$query);
 while($row = mysqli_fetch_array($query_run)){

   ?>
<input type='hidden' id='Empowerment' value ="<?php echo $row['Empowerment'];?>">
<input type='hidden' id='Armour' value ="<?php echo $row['Armour'];?>">
<input type='hidden' id='Missiles' value ="<?php echo $row['Missiles'];?>">

<?php
 
}; 
?>


<!--EXPENSES-->

<?php 

$conn = mysqli_connect('127.0.0.1:3307','root','','mossystem');

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

?>



