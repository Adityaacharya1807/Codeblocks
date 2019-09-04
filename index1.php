<html>
<head>
<title>Bug Theory</title>
<body background="debug1.jpeg" width="100%" height="100%">


                    &nbsp <a href="table.php"><font size="6" color="orange">BUGREPORT</a></font>
&nbsp					
<div class="container" style="width:800px; margin:0 auto;">
<center>
<img  onmouseover="bigImg(this)"onmouseout="normalImg(this)" border="0" src="sil.png"  width="232" height="222" alt="Smiley face" />
<script>
function bigImg(x) {
  x.style.height = "400px";
  x.style.width = "510px";
}

function normalImg(x) {
  x.style.height = "232px";
  x.style.width = "222px";
}
</script>

</center> 
<div style="width:800px; margin:0 auto;">
<div style="width:800px; margin:0 auto;">
<center>
<form name="registration" method="POST" action="registration.php">
<center>
<table align="center">
<h4 style="font-family:verdana;"><font size="5" color="black">Bugid:&nbsp &nbsp &nbsp <input type="number" name="Bugid" value="" pattern="[0-9]" min="0" max="10000000000000000"></br></font></h4>
&nbsp
</center>
<center>
<h4 style="font-family:verdana;"><font size="5" color="black">Bugname:&nbsp &nbsp &nbsp <input type="text" name="Bugname" value=""></br></font></h4>
&nbsp
</center>
<center>
<h4 style="font-family:verdana;"><font size="5" color="black">Bugdescription:&nbsp &nbsp &nbsp <textarea rows="3" cols="20" name="Bugdescription" placeholder="BUGWALA!!!!!">
</textarea>
</br></font></h4>
&nbsp
</center>
<center>
<h4 style="font-family:verdana;"><font size="5" color="black">Priority:&nbsp &nbsp &nbsp <input type="radio" id="High" name="Priority" value="High" checked>High<input type="radio" id="Moderate" name="Priority" value="Moderate" checked>Moderate<input type="radio" id="Low" name="Priority" value="Low" checked>Low</br></font></h4>
								&nbsp </center>
							
</center>
<center>
<h4 style="font-family:verdana;"><font size="5" color="black">Severity:&nbsp &nbsp &nbsp <input type="radio" id="Critical" name="Severity" value="Critical" checked>Critical<input type="radio" id="High" name="Severity" value="High" checked>High<input type="radio" id="Medium" name="Severity" value="Medium" checked>Medium<input type="radio" id="Low" name="Severity" value="Low" checked>Low</br></font></h4>
								&nbsp </center>
</center>
<h4> 	<font size="5" color="black"><input type="submit" name="submit" value="submit"></font>
</center>
</div>
</div>
</div>
</table>
</form>
<h3><font size="6" color="RED">Search Details</h3>
<form method="post" action="search.php">
<input type="text" name="search" placeholder="enter Bugid"/>
<button>search</button>
</center>
</div>
</form>
</body>
</head>
</html>
