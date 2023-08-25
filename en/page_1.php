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
<!--character encoding for the HTML document utf-8 -->
<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
<title>Edit your profile</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>
<!-- head starting -->
   <!-- body -->
<body>
       <!-- php script -->
<?php

require 'files/header.inc.php';

//checks cookies to make sure they are logged in
if(isset($_COOKIE['ID_my_site']))
{
$username = $_COOKIE['ID_my_site'];
$pass = $_COOKIE['Key_my_site'];
$check = $result = $dbc -> query("SELECT * FROM users WHERE username = '$username'");
while($info = mysqli_fetch_array( $check ))
{

//if the cookie has the wrong password, they are taken to the login page
if ($pass != $info['password'])
{ header("Location: main.php");
}

//otherwise they are shown the admin area
echo "<div id='links'>";
echo "<b>Welcome</b>";
echo "<br>";
echo "Hello <b> $username</b> &ensp; &ensp;";
echo "<br>";
$ip=$_SERVER['REMOTE_ADDR'];
echo "your IP is :"; 
echo "<br>";
echo "<b>$ip</b> &ensp; &ensp;";
echo "<br>";
echo "<a href=profile.php>Profile</a>";
echo "<br>";
echo "<a href=new_password.php>New password</a>&ensp; &ensp;";
echo "<br>";
$result = $result = $dbc -> query("SELECT * FROM users");
$num_rows = mysqli_num_rows($result);

echo "Total users <strong>".$num_rows." </strong>\n";
echo "<br>";
echo "<a href=logout.php>Logout</a>";
echo "</div>";
}
}
else

//if the cookie does not exist, they are taken to the login screen
{
header("Location: index.php");
}
?>
  <!-- php script -->
<table id="firstpage">
<tr>                   <!-- body subject matter -->
<th id="rorfirstpage"><center>Welcome</center></th>

</tr>

<tr id="myform">
<td><center>Welcome <br> user page<br> <h1><?php echo "« " .$username. " » !!!!!";?></h1></center></td>

</tr>
</table>  
<!-- body subject matter -->
</body>
       <!-- body -->
</html>
