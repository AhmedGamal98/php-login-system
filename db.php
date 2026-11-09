<?php
/* Database connection settings */
$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASSWORD') ?: '';   // XAMPP default: empty password
$db = getenv('DB_NAME') ?: 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
