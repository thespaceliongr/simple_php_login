<?php

require 'config.inc.php';

$dbc = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

// Check connection
if ($dbc -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>