<?php 
/*if(!$_SESSION['username'])
{
    header('location:../login/login.php');
}*/
   $conn = mysqli_connect("127.0.0.1:3307", "root", "", "mossystem");
       if ($conn->connect_error) {
        die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT * FROM attendance ORDER BY atid DESC";
        $result = $conn-> query($sql);
                            
        if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_array())
 {?>
 <script src="jquery/jquery-3.6.0.min.js"></script>
<script>
function activate(element) {

}

function updateValue(element, column, atid) {
    var value = element.innerText

    $.ajax({
        url: '../attendance/backend.php',
        type: 'POST',
        data: {
            value: value,
            column: column,
            atid: atid
        },
        success: function(php_result) {
            console.log(php_result);
        }
    });
}
</script>
    <tr>
        <td contenteditable="true" onBlur="updateValue(this,'atdate','<?php echo  $row['atid']; ?>')" onClick="activate(this)"><?php echo $row['atdate'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'atmonth','<?php echo  $row['atid']; ?>')" onClick="activate(this)"><?php echo $row['atmonth'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'memtotal','<?php echo  $row['atid']; ?>')" onClick="activate(this)"><?php echo $row['memtotal'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'males','<?php echo  $row['atid']; ?>')" onClick="activate(this)"><?php echo $row['males'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'females','<?php echo  $row['atid']; ?>')" onClick="activate(this)"><?php echo $row['females'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'childtotal','<?php echo  $row['atid']; ?>')" onClick="activate(this)"><?php echo $row['childtotal'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'vistotal','<?php echo  $row['atid']; ?>')" onClick="activate(this)"><?php echo $row['vistotal'];?></td>
        <td contenteditable="true" onBlur="updateValue(this,'overtotal','<?php echo  $row['atid']; ?>')" onClick="activate(this)"><?php echo $row['overtotal'];?></td>
        <td><a href="delete.php?atid=<?php echo $row['atid']; ?>" class="delete">DELETE</a></td>
    </tr>
    <?php 
        }
        echo "</table>";
        }else {
        echo "0 result";
        }
        $conn-> close();

      
?>      