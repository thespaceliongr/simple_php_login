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
<title>Register</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>
<!-- head starting -->
   <!-- body -->
<body>
       <!-- php script -->
<?php

require 'files/header.inc.php';

//This code runs if the form has been submitted
if (isset($_POST['submit'])) {

//This makes sure they did not leave any fields blank
if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
die('You did not complete all of the required fields');
}

// checks if the username is in use
if(!(function_exists("get_magic_quotes_gpc") && get_magic_quotes_gpc())    || !(ini_get('magic_quotes_sybase') && !(strtolower(ini_get('magic_quotes_sybase'))!="off")) ) {
   $_POST['username'] = addslashes($_POST['username']);
}
$usercheck = $_POST['username'];
$check = $dbc -> query("SELECT username FROM users WHERE username = '$usercheck'")
or die(mysqli_error());
$check2 = mysqli_num_rows($check);

//if the name exists it gives an error
if ($check2 != 0) {
echo "<script>
 setTimeout(function(){
            window.location.href = 'rules.php';
         }, 3000); 

</script>
";
echo " <div style='color:white;'>Sorry, the username ".$_POST['username']." is already in use.</div>";

}

// this makes sure both passwords entered match
if ($_POST['pass'] != $_POST['pass2']) {
die('Your passwords did not match. ');
}

// here we encrypt the password and add slashes if needed
$mypass = base64_encode($_POST['pass']);
if(!(function_exists("get_magic_quotes_gpc") && get_magic_quotes_gpc())    || !(ini_get('magic_quotes_sybase') && !(strtolower(ini_get('magic_quotes_sybase'))!="off")) ) {
   $mypass1 = addslashes($mypass);
$myuser = addslashes($_POST['username']);
$myemail = addslashes($_POST['Email']);
$myage = addslashes($_POST['age']);
}

// now we insert it into the database
$insert="INSERT INTO users (username, email, password,  age)
VALUES ('".$myuser."', '".$myemail."', '".$mypass1."', '".$myage."')";

 
if ($dbc -> query($insert, $dbc)) {

  $mymail = "auto-reply@thespaceliongr.net";
  $username = $myuser ;
  $password = base64_decode($mypass1);
  $Email = $myemail  ;

//send email
$subject="From: \"The Space Lion Gr Net Welcome\" <auto-reply@thespaceliongr.net>\r\n";
$message = "
<html>
<head>
<title>The Space Lion Gr Net New Password</title>
</head>
<div>

Welcome to MYSITE...<br>
Email: $Email <br>
Username: $username <br>
Password: $password <p>

Thank You Very Much !!!!  <p>

Administrator      <br>
THE SPACE LION GR NET   <p>
______________________________________________________ <br>
THIS IS AN AUTOMATED RESPONSE.  <br>
***DO NOT RESPOND TO THIS EMAIL**** <br>
</div>
</body>
</html>
";

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
$headers .= 'From:'. $mymail . "\r\n";

mail($Email,$subject,$message,$headers);
  
    echo "<div style='color:white;'><h1> You have been signed up </h1>
<p> Thank you very much for registering, now log in </p>
<a href='login.php'>Login </a></div></p>";
} else {
   echo "Error: " . $insert . "<br>" . $dbc->error;
}
}
else
{
?>
     
<table id="links">
<tr>                   <!-- Menu links -->
<th id="rolinks"> Links </th>

</tr>

<tr>
<td> <a href="main.php">Home</a></td>

</tr>
</table>
<table id="register">
<tr>                   <!-- body subject matter -->
<th id="roregister"> Register </th>

</tr>

<tr>
<td>       <!-- form action -->

<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table id="myform" border="0">
<tr> <td> Username: </td> <td>
<input type="text" name="username" maxlength="60">
</td> </tr>
<tr> <td> Email: </td> <td>
<input type="text" name="Email" maxlength="60">
</td> </tr>
<tr> <td> Password: </td> <td>
<input type="password" name="pass" maxlength="10">
</td> </tr>
<tr> <td> Confirm Password: </td> <td>
<input type="password" name="pass2" maxlength="10">
</td> </tr>
<tr> <td> Age: </td> <td>
<input type="text" name="age" maxlength="60">
</td> </tr>
<tr><th colspan=2><input type="submit" name="submit" value="Register"></th></tr> </table>
</form>      <!-- form action -->

</td>

</tr>
</table>   <!-- body subject matter -->

<?php
}
?>    <!-- php script -->
</body>
       <!-- body -->
</html>
