<?php
$hostname="127.0.0.1"; 
$username="root";  
$password="1234";    
$database="bugreport";  
$con=mysqli_connect($hostname,$username,$password,$database);
if(!$con)
{
        die('Connection Failed'.mysqli_connect_error());
}
//mysqli_select_db($database,$con);	
?>



