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
<title>Forgot your password</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>
<!-- head starting -->
   <!-- body -->
<body>
       <!-- php script  -->
<?php 
require 'files/header.inc.php';


/******************* ACTIVATION BY FORM**************************/
if ($_POST['doReset']=='Reset')
{
$mymail = "auto-reply@thespaceliongr.net";

$Email = mysql_real_escape_string($_POST['email']);

//check if activ code and user is valid as precaution
$rs_check = mysql_query("select * from users where email='$Email'") or die (mysql_error()); 
$num = mysql_num_rows($rs_check);
while($row = mysql_fetch_array( $rs_check ))
{
$username = $row['username'];
 }
  // Match row found with more than 1 results  - the user is authenticated. 
    if ( $num <= 0 ) { 
	$msg = urlencode("<font color=white>Error - Sorry I can not find this email or is not registered.</font>");
	header("Location: forgot.php?msg=$msg");
	exit();
	}
//generate 4 digit random number
$new = rand(1000,9999);
$md5_new = md5($new);	
//set update md5 of new password
$rs_activ = mysql_query("update users set password='$md5_new' WHERE 
						email='$Email'") or die(mysql_error());
						 
//send email
$subject="From: \"The Space Lion Gr Net New Password\" <auto-reply@thespaceliongr.net>\r\n";
$message = "
<html>
<head>
<title>The Space Lion Gr Net New Password</title>
</head>
<div>

Here are your new password details ...<br>
Email: $Email <br>
Username: $username <br>
Password: $new <p>

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
						 
						 
$msg = urlencode("<font color=white>Your account password has been reset and a new password has been sent to your email address.</font>");
header("Location: forgot.php?msg=$msg");						 
exit();
}

?>

<script language="JavaScript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/jquery.validate.js"></script>
  <script>
  $(document).ready(function(){
    $("#actForm").validate();
  });
  </script>

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" valign="top"><p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="732" valign="top">
<h3 class="titlehdr"><font color=white>Forgot password</font></h3>

      <p> 
        <?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
      if (isset($_GET['msg'])) {
	  echo "<div class=\"msg\">$_GET[msg]</div>";
	  }
	  /******************************* END ********************************/	  
	  ?>
      <!-- php script  -->
      </p>                                                  <!-- body subject matter -->

      <p style="color:white;">If you have forgotten your account password, you can reset your password <strong>with a new password</strong> to be sent to your email address.
	             <!-- form action -->
      <form action="forgot.php" method="post" name="actForm" id="actForm" >
        <table width="65%" border="0" cellpadding="4" cellspacing="4" class="loginform">
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td width="36%" style="color:white;">Your Email.</td>
            <td width="64%"><input name="email" type="text" class="required email" id="txtboxn" size="25"></td>
          </tr>
          <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input name="doReset" type="submit" id="doLogin3" value="Reset">
                </p>
              </div></td>
          </tr>
        </table>
        <div align="center"></div>
        <p align="center">&nbsp; </p>
      </form>
        <!-- form action -->
	    <a href="javascript:history.go(-1)">Go Back.</a> 
      <p>&nbsp;</p>
	   
      <p align="left">&nbsp; </p></td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table></p>
    <!-- body subject matter -->
    </body>
       <!-- body -->
</html>
