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
<title>Επεξεργάσια του προφίλ</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" /> 
</head>
<!-- head starting -->
   <!-- body -->
<body>
       <!-- php script -->
<?php

require 'files/header.inc.php';

   $id = $_GET['id'];

    $sql   = "SELECT * FROM users WHERE id='$id'";
    $result = $dbc -> query($sql);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

     while($row = mysqli_fetch_array($result)){
$pid = $row['id'];
$username = $row['username'];
$firstname = $row['firstname'];
$last  = $row['lastname'];
$email = $row['email'];
$age = $row['age'];
$location = $row['location']; 
$website = $row['website'];


?>
    <!-- php script -->


     
<table id="links">
<tr>                   <!-- Menu links -->
<th id="rolinks"> Σύνδεσμοι </th>

</tr>

<tr>
<td> <a href="page_1.php">Αρχική</a></td>

</tr>
</table>
<table id="register">
<tr>                   <!-- body subject matter -->
<th id="roregister"> Επεξεργάσια του προφίλ </th>

</tr>

<tr>
<td>       <!-- form action -->

<form  action="update.php" method="post">
<table id="myform" border="0">
 <input type="hidden" name="id" value="<?php echo $pid;?>">
<tr> <td> Όνομα Χρήστη: </td> <td>
<label><strong>« <?php echo $username;?> »</strong></label>
</td> </tr>
<tr> <td> Όνομα: </td> <td>
<input type="text" name="firstname" maxlength="60" value = "<?php echo $firstname;?>">
</td> </tr>
<tr> <td> Επώνυμο: </td> <td>
<input type="text" name="lastname" maxlength="60" value = "<?php echo $last;?>">
</td> </tr>
<tr> <td> Email: </td> <td>
<input type="text" name="email" maxlength="60" value = "<?php echo $email;?>">
</td> </tr>
<tr> <td> Ηλικία: </td> <td>
<input type="text" name="age" maxlength="60" value = "<?php echo $age;?>">
</td> </tr>
<tr> <td> Τοποθεσία : </td> <td>
<input type="text" name="location" maxlength="60" value = "<?php echo $location;?>">
</td> </tr>
<tr> <td> Ιστότοπος: </td> <td>
<input type="text" name="website" maxlength="60" value = "<?php echo $website;?>">
</td> </tr>

<tr><th colspan=2><input type="submit" name="submit" value="Ενημέρωση"></th></tr> </table>
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
