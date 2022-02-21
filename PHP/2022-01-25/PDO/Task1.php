<?php

$database = getenv('MYSQL_DATABASE');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

$dbh = new PDO("mysql:host=db-mariadb;dbname={$database}", $username, $password, [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$query = "SELECT * FROM users WHERE TIMESTAMPDIFF(YEAR,birthdate,NOW()) >= 18 LIMIT 15 ";
$stmt = $dbh->prepare($query);
$stmt->execute();
var_dump($stmt->fetchAll());