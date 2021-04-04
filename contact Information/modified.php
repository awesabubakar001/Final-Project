<?php    
    
while($row = mysql_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->First;?>  
        </td>  
        <td>  
            <?php echo $row->Last;?>  
        </td>  
        <td>  
            <?php echo $row->Email;?>  
        </td>  
        <td>  
            <?php echo $row->Phone;?>  
        </td>  
        <td>  
            <?php echo $row->Date;?>  
        </td>      
        <td>  
            <?php echo $row->Username;?>  
        </td> 
        <td>
        <?php echo $row-Password;?>
        </td>
        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
            <?php }?>  
