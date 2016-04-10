<?php

$host = "localhost";
$servername = "financas";
$username = "root";
$password = "teste123";

// Create connection
$conn = mysql_connect($host, $username, $password) or trigger_error(mysql_error(), E_USER_ERROR);

mysql_select_db($servername, $conn);
?>