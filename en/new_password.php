<!--
Simple php member (progress bar, rules, register, login, profile, edit, update, forgot, new password, total users,your ip,logout, sql).


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
       <!-- php script  -->
<?php
require 'files/header.inc.php';

if (isset($_POST['submit'])) {

    if ($_POST['pass'] = $_POST['pass2']) {
		$usercheck = $_POST['username'];
      $query = mysql_query("SELECT username FROM users WHERE username = '$usercheck'")
      or die(mysql_error());
$check2 = mysql_num_rows($check);

// here we encrypt the password and add slashes if needed
$_POST['pass'] = md5($_POST['pass']);
if (!get_magic_quotes_gpc()) {
$_POST['pass'] = addslashes($_POST['pass']);
}
	  {
		  $dbpassword = $_POST['pass'];
        if (mysql_query("UPDATE users SET password = '$dbpassword' WHERE username = '$usercheck'"))
		if ($_POST['pass'] = 1)
		{
          header("Location: change.php");
        } 
	}
}
}
?>      <!-- php script  -->
<center>


<table id="links">
<tr>
<th id="rolinks"> Links </th>

</tr>          <!-- Menu links -->

<tr>
<td> <a href="page_1.php"> Home </a> </td>

</tr>
</table>
<table id="newpass">     <!-- body subject matter -->
<tr>
<th id="ronewpass"> New password </th>

</tr>

<tr>
<td>
 
                           <!-- form action -->
<form id="myform" name="update_pw" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<div id="update_pw" >
<font size = 2>
Create new code using User Name to find the old Code  <br> <br>
<div class="f">
Username: &ensp; <input type="text" name="username" /> </div> 
<div class="r">
Old Code: &ensp; <input type="password" name="old_pass" /> </div> 
<div class="r">
New Password: &ensp; <input type="password" name="pass" /> </div> 
<div class="r">
Confirmed New Code: &ensp; <input type="password" name="pass2" /> </div> 
<div class="r"> 
<input type="submit" name="submit" value="Change it!">
</div>             <!-- form action -->
</form>  <br>
<a href="javascript:history.back();"> Back </a> </font>
</center>

</td>

</tr>
</table>         
 <!-- body subject matter -->
  </body>
       <!-- body -->
</html>
