<?php

$hostname = 'localhost';
$username = 'codex';
$password = 'codex@';
$dbname = 'chat';

$conn = new mysqli($hostname, $username, $password, $dbname);

if (!$conn) {
    echo "Database connected" .mysqli_connect_error();
}
?>