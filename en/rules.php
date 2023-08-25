<!--
Simple php member (users, register, login, profile, edit, update, sql).


 * @copyright 2007-2019 The Space Lion Gr Net
 * @see https://www.thespaceliongr.net/
 * @Author Stavros Vourliotis.

//-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<!-- head starting -->
<head>
<title>Rules</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>
<!-- head starting -->
   <!-- body -->
<body>
<table id="links">
<tr>
<th id="rolinks">Links</th>

</tr>      <!-- Menu links -->

<tr>
<td><a href="main.php">Home</a>. <br><a href="login.php">Login</a> <br><a href="kanones.php">Register</a></td>

</tr>
</table>
<center>        <!-- body subject matter -->
<table id="tborder" align="center" border="0" cellpadding="6" cellspacing="1" width="100%">
<tbody><tr>

</tr>
<tr>
	<td id="panelsurround" align="center">
	<div id="panel">
		<div style="width: 640px;" align="left">

			<fieldset id="fieldset">
				<legend>WEBSITE REGULATION</legend>
				<table border="0" cellpadding="0" cellspacing="3" width="100%">
				<tbody><tr>

					
				</tr>
				<tr>
					<td>
						<div id="page" style="border: thin inset ; padding: 6px; overflow: auto; height: 175px;">

							

							<!-- regular site rules -->
<p> <strong>WEBSITE REGULATION</strong> </p>

<p> Your registration on this site is free! We insist that all the rules will be observed by you. If you agree to the terms, please check the 'I Agree' box and click on 'Subscribe' button below. If you want to cancel the registration, click <a href="index.php"> here </a> to return to the home page. <p>

Although the administrators and moderators of www.website.gr will try to answer all of your messages and the questions you have. We will try to give you what you need and make it easy for you !!! <b> "No Charge" !!!! </b> we will look to have the best !!!!!
<p>						<!-- regular site rules -->

						</div>
					</td>
				</tr>
				</tbody></table>
                
<!-- javascript enaple disable button submit -->
<script type="text/javascript">

var i = 0;

function enable_submit(obj)
{
	
	var sb = document.getElementById("Submit");
	if(obj.checked === true){ sb.disabled = false; i++; }
	else{ 

		i--;
		if(i == 0){	sb.disabled = true; }
	
	}
	
}

</script>
<!-- script enaple disable button submit -->


<!-- form action -->
<form action="register.php" method="post" id="Form1">
<input type="checkbox" name="Domain1" value="Register" onclick="enable_submit(this);"><br>
 Agree.
<p>
<input type="submit" name="Submit" id="Submit" value="Register" disabled="disabled">
</form>
<!-- form action -->
<p>
</center>
 <!--  subject matter -->
</body>
       <!-- body -->
</html>
