 <html>
 <head>
 <title>R E G I S T E R</title>
 <body>
<a href="table.php"><h1>Check the results</a>
 <?php  
 
Include('connect.php');

if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['Bugid']=='' ||$_REQUEST['Bugname']=='' || $_REQUEST['Bugdescription']=='' || $_REQUEST['Priority']=='' || $_REQUEST['Severity']=='')
{
echo "please fill the empty field.";
}
else
{
$sql= "insert into bugreport (Bugid,Bugname,Bugdescription,Priority,Severity) values ('".$_REQUEST['Bugid']."','".$_REQUEST['Bugname']."', '".$_REQUEST['Bugdescription']."','".$_REQUEST['Priority']."','".$_REQUEST['Severity']."')";
$res=mysqli_query($con,$sql);
}
if($res)
{
echo "Record successfully inserted";
}
else
{
echo "There is some problem in inserting record";
}

}


?>
</head>
</html>