<!--
Simple php member (progress bar, rules, register, login, profile, edit, update, forgot, new password, total users,your ip,logout, sql).

 * @copyright 2007-2019 The Space Lion Gr Net
 * @see https://www.thespaceliongr.net/
 * @Author Stavros Vourliotis.

//-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--character encoding for the HTML document utf-8 -->
<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
      <!-- update -->
      <!-- php script  -->
<?php
      require 'files/header.inc.php';

if(isset($_POST['submit'])){

    
   $pid = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$email = $_POST['email'];
$age = $_POST['age'];
$location = $_POST['location']; 
$website = $_POST['website'];

$update = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', age='$age', location='$location', website='$website' WHERE id='$pid'";
$add_member = $dbc -> query($update);
if ($dbc -> query($update)) {
    header ("location: profile.php");
} else {
    echo "Error updating record: " . mysqli_error($dbc);
}

 } 

?>
 <!-- php script  -->
