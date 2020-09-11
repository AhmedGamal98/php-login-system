<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'YOUR_DB_PASSWORD';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
