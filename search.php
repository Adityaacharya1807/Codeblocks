<html>
<head>
<body>
<a href="table.php"><font size="6" color="red">All Values</a></font>
<br>
<br>
<?php

Include('connect.php');
$set=$_POST['search'];
if($set){
$show ="SELECT * FROM bugreport where Bugid='$set'";
$result = mysqli_query($con, $show);
while($rows=mysqli_fetch_assoc($result))
 {
echo "Bugid :";
echo $rows['Bugid'];
echo "<br>";
echo "Bugname :";
echo $rows['Bugname'];
echo "<br>";
echo "Bugdescription :";
echo $rows['Bugdescription'];
echo "<br>";
echo "Priority :";
echo $rows['Priority'];
echo "<br>";
echo "Severity :";
echo $rows['Severity'];
exit;
  }
echo "NOTHING FOUND";
}
?>
</head>
</body>
</html>