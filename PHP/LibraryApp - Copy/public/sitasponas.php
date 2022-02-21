<?php

// require_once '../../functions.php';

$database = getenv('MYSQL_DATABASE');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

$dbh = new PDO("mysql:host=db-mariadb;dbname={$database}", $username, $password, [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$query = 'SELECT *
	FROM books';

$stmt = $dbh->prepare($query);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);