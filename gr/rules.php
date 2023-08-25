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
<table id="links">
<tr>                <!-- Menu links -->
<th id="rolinks">Óýíäåóìïé</th>

</tr>

<tr>
<td><a href="main.php">Áñ÷éêÞ</a>. <br><a href="login.php">Óýíäåóç</a> <br><a href="kanones.php">ÅããñáöÞ</a></td>

</tr>
</table>
<center>
<table id="tborder" align="center" border="0" cellpadding="6" cellspacing="1" width="100%">
<tbody><tr>

</tr>
<tr>                 <!-- body subject matter -->
	<td id="panelsurround" align="center">
	<div id="panel">
		<div style="width: 640px;" align="left">

			<fieldset id="fieldset">
				<legend>ÊÁÍÏÍÉÓÌÏÓ ÉÓÔÏ×ÙÑÏÕ</legend>
				<table border="0" cellpadding="0" cellspacing="3" width="100%">
				<tbody><tr>

					
				</tr>
				<tr>
					<td>
						<div id="page" style="border: thin inset ; padding: 6px; overflow: auto; height: 175px;">

							

							<!-- regular site rules -->
							<p><strong>ÊÁÍÏÍÉÓÌÏÓ ÉÓÔÏ×ÙÑÏÕ</strong></p>

<p>Ç åããñáöÞ óáò óå áõôü ôï site åßíáé äùñåÜí! Åìåßò åðéìÝíïõìå üôé èá ôçñçèïýí ïëïé ïé êáíüíåò áðåíáíôß óå åóÜò. Áí óõìöùíåßôå ìå ôïõò üñïõò, ðáñáêáëïýìå íá åëÝãîåôå ôçí 'Óõìöùíþ' êïõôÜêé êáé ðáôÞóôå ôï "ÅããñáöÞ" ðáñáêÜôù êïõìðß. Áí èÝëåôå íá áêõñþóåôå ôçí åããñáöÞ, êÜíôå êëéê <a href="index.php">åäþ</a> ãéá íá åðéóôñÝøåôå óôçí áñ÷éêÞ óåëßäá.<p>

Áí êáé ïé äéá÷åéñéóôÝò êáé ïé óõíôïíéóôÝò ôïõ www.site.gr èá ðñïóðáèÞóïõí íá áðáíôÞóïõí óå üëá ôá ìçíýìáôá óÜò êáé óå ïôé áðïñßåò Ý÷åôå. Èá ðñïóðáèÞóïõìå  íá óáò äþóïõìå üôé ÷ñåéÜæåóôå êáé óáò äéåõêïëýíåé !!! <b>"×ùñßò êáìßá åðéâÜñõíóåé" !!!! </b> èá êïéôÜîïõìå íá Ý÷ïõìå ôá êáëýôåñá !!!!!
<p>							<!-- regular site rules -->

						</div>
					</td>
				</tr>
				</tbody></table>
                <!-- javascript enaple disable button submit -->
<script>

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
<!-- javascript enaple disable button submit -->
         <!-- form action -->
<form action="register.php" method="post" id="Form1">
<input type="checkbox" name="Domain1" value="ÅÃÃÑÁÖÇ" onclick="enable_submit(this);"><br>
 ÓÕÌÖÙÍÙ.
<p>
<input type="submit" name="Submit" id="Submit" value="ÅÃÃÑÁÖÇ" disabled="disabled">
</form>
<!-- form action -->
<p>
</center>
<!-- body subject matter -->
</body>
       <!-- body -->
</html>
