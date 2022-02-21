<?php

require_once '../../functions.php';

$database = getenv('MYSQL_DATABASE');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

$dbh = new PDO("mysql:host=db-mariadb;dbname={$database}", $username, $password, [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// $dbh->query(file_get_contents('sql/create.sql'));
// $dbh->query(file_get_contents('sql/insert.sql'));