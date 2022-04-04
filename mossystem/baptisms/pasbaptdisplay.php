<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM baptisms ORDER BY baptid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
 <script src="jquery/jquery-3.6.0.min.js"></script>
 <script>
     function activate(element){

     }

     function updateValue(element,column,baptid){
               var value = element.innerText 
               
               $.ajax({
                   url:'backend.php',
                   type:'POST',
                   data:{
                       value: value,
                       column: column,
                       baptid: baptid
                   },
                    success: function(php_result){
                        console.log(php_result);
                    }
               });
     }
 </script>
    <tr>
        <td contenteditable="true" onBlur="updateValue(this,'baptname','<?php echo  $row['baptid']; ?>')" onClick="activate(this)"><?php echo $row['baptname'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'baptdate','<?php echo  $row['baptid']; ?>')" onClick="activate(this)"><?php echo $row['baptdate'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'baptizer','<?php echo  $row['baptid']; ?>')" onClick="activate(this)"><?php echo $row['baptizer'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'baptvenue','<?php echo  $row['baptid']; ?>')" onClick="activate(this)"><?php echo $row['baptvenue'];?></td>
        <td><a href="pasbaptdelete.php?baptid=<?php echo $row['baptid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
      
