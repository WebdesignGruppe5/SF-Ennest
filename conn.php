<?php

//Datenbankverbindung aufbauen
$mysqli = new mysqli("localhost", "webdevg5", "3NSCSdfO", "dev_webdevg5");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->set_charset("utf8");

?>