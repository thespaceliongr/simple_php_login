<?php

require 'config.inc.php';

$dbc = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$dbc)
{
	exit('<strong>Error: </strong>Couldn\'t connect to MySQL Database.<br />'.mysql_errno().': '.mysql_error());
}

if (!mysql_select_db($dbname))
{
	exit('<strong>Error: </strong>Couldn\'t select MySQL Database.<br />'.mysql_errno().': '.mysql_error());
}

?>