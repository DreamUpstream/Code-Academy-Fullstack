<?php

require_once 'base.php';

$query = 'SELECT *
	FROM users
	WHERE updated_at IS NOT NULL
	LIMIT 100;';

$stmt = $dbh->prepare($query);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

dd($users);