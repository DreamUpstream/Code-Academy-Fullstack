<?php
$database = getenv('MYSQL_DATABASE');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');



$dbh = new PDO("mysql:host=db-mariadb;dbname={$database}", $username, $password);