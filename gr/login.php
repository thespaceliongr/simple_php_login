﻿<!--
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
<title>Είσοδος</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>
<!-- head starting -->
   <!-- body -->
<body>
       <!-- php script  -->
<?php

require 'files/header.inc.php';
echo "<div style='color:white;'>";
//Checks if there is a login cookie
if(isset($_COOKIE['ID_my_site']))

//if there is, it logs you in and directes you to the page_1 page
{
$username = $_COOKIE['ID_my_site'];
$pass = $_COOKIE['Key_my_site'];
$check = $result = $dbc -> query("SELECT * FROM users WHERE username = '$username'");
while($info = mysqli_fetch_array( $check ))
{
if ($pass != $info['password'])
{
}
else
{
header("Location: page_1.php");

}
}
}

//if the login form is submitted
if (isset($_POST['submit'])) { // if form has been submitted

// makes sure they filled it in
if(!$_POST['username'] | !$_POST['pass']) {
die('Δεν συμπληρώσατε υποχρεωτiκό πεδίο.');
}
// checks it against the database

if(!(function_exists("get_magic_quotes_gpc") && get_magic_quotes_gpc())    || !(ini_get('magic_quotes_sybase') && !(strtolower(ini_get('magic_quotes_sybase'))!="off")) ) {
$_POST['username'] = addslashes($_POST['username']);
}
$check = $dbc -> query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());

//Gives error if user dosen't exist
$check2 = mysqli_num_rows($check);
if ($check2 == 0) {
die('Αυτός ο χρήστης δεν υπάρχεi στη βάση δεδομένων μας. <a href=register.php>Δημiύργησε Νέα Εγγραφή</a>');
}
while($info = mysqli_fetch_array( $check ))
{
$_POST['pass'] = stripslashes($_POST['pass']);
$info['password'] = stripslashes($info['password']);
$_POST['pass'] = base64_encode($_POST['pass']);

//gives error if the password is wrong
if ($_POST['pass'] != $info['password']) {
die('Λάθος κωδiκός. Παρακαλώ προσπαθήστε ξανά.');
}
else
{

// if login is ok then we add a cookie
$_POST['username'] = stripslashes($_POST['username']);
$hour = time() + 3600;
setcookie("ID_my_site", $_POST['username'], $hour);
setcookie("Key_my_site", $_POST['pass'], $hour);
 
echo "</div>";
//then redirect them to the page_1 area
header("Location: page_1.php");
}
}
}
else
{

// if they are not logged in
?>
<table id="links">     <!-- Menu links -->
<tr>
<th id="rolinks">Σύνδεσμοi</th>

</tr>

<tr>
<td><a href="main.php">Αρχiκή</a></td>

</tr>
</table>
<table id="login">
<tr>                    <!-- body subject matter -->
<th id="rologin">Σύνδεση</th>

</tr>

<tr>                           <!-- form action -->
<td>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<table border="0" id="myform">
<tr><td>Όνομα Χρήστη:</td><td>
<input type="text" name="username" maxlength="40">
</td></tr>
<tr><td>Κωδiκός Πρόσβασης:</td><td>
<input type="password" name="pass" maxlength="50">
</td></tr>
<tr><td colspan="2" align="right">
<input type="submit" name="submit" value="Σύνδεση">
</form>   
<!-- form action -->

<p>
<a href="rules.php">Νέα Εγγραφή</a>&ensp; &ensp;
<a href="forgot.php">Ξέχασα τον Κωδiκό μου</a>
</td>

</tr>
</table>
 <!-- body subject matter -->
<?php
}

?> 
<!-- php script  -->
</body>
       <!-- body -->
</html>
