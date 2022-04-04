<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM certificates ORDER BY cid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
 <script src="jquery/jquery-3.6.0.min.js"></script>
 <script>
     function activate(element){

     }

     function updateValue(element,column,cid){
               var value = element.innerText 
               
               $.ajax({
                   url:'backend.php',
                   type:'POST',
                   data:{
                       value: value,
                       column: column,
                       cid: cid
                   },
                    success: function(php_result){
                        console.log(php_result);
                    }
               });
     }
 </script>
    <tr>
        <td contenteditable="true" onBlur="updateValue(this,'certdate','<?php echo  $row['cid']; ?>')" onClick="activate(this)"><?php echo $row['certdate'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'certname','<?php echo  $row['cid']; ?>')" onClick="activate(this)"><?php echo $row['certname'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'certype','<?php echo  $row['cid']; ?>')" onClick="activate(this)"><?php echo $row['certype'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'awdate','<?php echo  $row['cid']; ?>')" onClick="activate(this)"><?php echo $row['awdate'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'certschool','<?php echo  $row['cid']; ?>')" onClick="activate(this)"><?php echo $row['certschool'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'certduration','<?php echo  $row['cid']; ?>')" onClick="activate(this)"><?php echo $row['certduration'];?></td>
        <td><a href="pascertdelete.php?cid=<?php echo $row['cid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      
