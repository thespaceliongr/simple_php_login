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
<title>Προφιλ</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>
<!-- head starting -->
   <!-- body -->
<body>
       <!-- php script  -->
<?php

require 'files/header.inc.php';

//checks cookies to make sure they are logged in
if(isset($_COOKIE['ID_my_site']))
{
$username = $_COOKIE['ID_my_site'];
$pass = $_COOKIE['Key_my_site'];
$check = $dbc -> query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
while($info = mysqli_fetch_array( $check ))
{

//if the cookie has the wrong password, they are taken to the login page
if ($pass != $info['password'])
{ header("Location: main.php");
}

//otherwise they are shown the admin area
else
{
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
echo "<a href=new_password.php>Νέος κωδικός</a>&ensp; &ensp;";
echo "<br>";
$result = $dbc -> query("SELECT * FROM users");
$num_rows = mysqli_num_rows($result);

echo "Total users <strong>".$num_rows." </strong>\n";
echo "<br>";
echo "<a href=logout.php>Αποσύνδεση</a>";
echo "</div>";
}
}
}
else

//if the cookie does not exist, they are taken to the login screen
{
header("Location: index.php");
}

        
          
          // body subject matter 


$check = $dbc -> query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

 echo "<div id='titleprofile'><center>Profile<center><div>";
echo "<br>";

echo "<table id='profile' border='1' >
<tr>

<th id='roshow'> Id</th>
<th id='roshow'> Username</th>
<th id='roshow'> Firstname</th>
<th id='roshow'> Lastname</th>
<th id='roshow'> Email</th>
<th id='roshow'> Age</th>
<th id='roshow'> Location</th>
<th id='roshow'> Website</th>
</tr>";
while($info = mysqli_fetch_array( $check ))
{
$id = $info['id'];
$username = $info['username'];
$firstname = $info['firstname'];
$lastname  = $info['lastname'];
$email = $info['email'];
$age = $info['age'];
$location = $info['location']; 
$website= $info['website'];

  echo "<tr>";
  echo "<td id='myform'><a href='edit.php?id=$id'>Edit your profile with id = " .$id. "</a></td>";
  echo "<td id='myform'>" . $username. "</td>";  
  echo "<td id='myform'>" . $firstname. "</td>";  
  echo "<td id='myform'>" . $lastname . "</td>";
  echo "<td id='myform'>" . $email . "</td>";
  echo "<td id='myform'>" . $age. "</td>";  
  echo "<td id='myform'>" . $location. "</td>";
  echo "<td id='myform'><a target='_blank' href='http://" . $website . "'>" . $website ."</a></td>";
  echo "</tr>";     
  }
echo "</table>";
echo "<table id='back' border='1'>";  
  echo "<tr>";
  echo "<center><th id='myform'><a href='javascript:history.back();'>Πίσω</a</th></cemter>";  
  echo "</tr>";
echo "</table>";

mysql_close($dbc);
?> 
         <!-- php script  -->     
 <!-- body subject matter -->
 </body>
       <!-- body -->
</html>
