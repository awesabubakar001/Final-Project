<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from registration where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from registration";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>        
                <td>First Name</td>       
                <td>Last Name</td>    
                <td>Email Address</td>    
                <td>Phone Number</td>    
                <td>Date of Birth</td>    
                <td>Username</td>    
                <td>Gender</td>    
                <td>Password</td>        
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>    