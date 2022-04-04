<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM staff ORDER BY srid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
 <script src="jquery/jquery-3.6.0.min.js"></script>
 <script>
     function activate(element){

     }

     function updateValue(element,column,srid){
               var value = element.innerText 
               
               $.ajax({
                   url:'backend.php',
                   type:'POST',
                   data:{
                       value: value,
                       column: column,
                       srid: srid
                   },
                    success: function(php_result){
                        console.log(php_result);
                    }
               });
     }
 </script>
    <tr>
        <td><?php echo $row['staffid'];?></td>
        <td><?php echo $row['staffname'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'department','<?php echo  $row['srid']; ?>')" onClick="activate(this)"><?php echo $row['department'];?></td>
        <td><a href="adstaffdelete.php?srid=<?php echo $row['srid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
