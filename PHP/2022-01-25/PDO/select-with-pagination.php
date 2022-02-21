<?php

require_once 'base.php';

define('QUERY_LIMIT', 10);

$offset = isset($_GET['page']) ? (int) $_GET['page'] : 0;

$query = 'SELECT *
	FROM users
	WHERE email_verified_at IS NULL
	LIMIT :offset, :limit;';

$stmt = $dbh->prepare($query);

$stmt->bindValue(':limit', QUERY_LIMIT, PDO::PARAM_INT); 
$stmt->bindValue(':offset', $offset * QUERY_LIMIT, PDO::PARAM_INT); 

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

dd($users);