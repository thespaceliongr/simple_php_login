<!--
Simple php member (progress bar, rules, register, login, profile, edit, update, forgot, new password, total users,your ip,logout, sql).

 * @copyright 2007-2019 The Space Lion Gr Net
 * @see https://www.thespaceliongr.net/
 * @Author Stavros Vourliotis.

//-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <!-- logout  -->
      <!-- php script  -->
<?php
$past = time() - 100;
//this makes the time in the past to destroy the cookie
setcookie(ID_my_site, gone, $past);
setcookie(Key_my_site, gone, $past);
header("Location: index.php");
?> 
<!-- php script  -->
