<?php
Include('connect.php');
if(isset($_GET['del'])){
	$delete_Bugid=$_GET['del'];
if(mysqli_query($con,"delete from bugreport where Bugid='$delete_Bugid'"))
{
	echo "the query works correctly";
}
else
{
echo"the query not working correctly";
}
}

$query= "select * from bugreport";
$result=mysqli_query($con,$query);
   ?>
<html>
<head>
<body background="debug1.jpeg" align="middle" width="100%" height=="100%">

<table align="center" border="2px" bgcolor="#B2FF33">
<a href="index1.php"><font size="6" color="orange">Index values</a></font>
<tr>
<th colspan="6" bgcolor="grey"><h2>BUGREPORT</h2></th>
</tr>
<t>
<th bgcolor="red">Bugid</th>
<th bgcolor="red">Bugname</th>
<th bgcolor="red">Bugdescription</th>
<th bgcolor="red">Priority</th>
<th bgcolor="red">Severity</th>
<th bgcolor="red">delete</th>
</t>
<?php
	
while($rows=mysqli_fetch_assoc($result))
{
?>
<tr> 
<t> 
<th><?php echo $rows ['Bugid'];?></th>
<th><?php echo $rows ['Bugname'];?></th>
<th><?php echo $rows ['Bugdescription'];?></th>
<th><?php echo $rows ['Priority'];?></th>
<th><?php echo $rows ['Severity'];?></th>
<th><a href="table.php?del=<?php echo $rows['Bugid']; ?>" onclick="return confirm('Are you sure!');">delete</a>
</t>
<?php
}
?>



</table>
</body>

</head>
</html>