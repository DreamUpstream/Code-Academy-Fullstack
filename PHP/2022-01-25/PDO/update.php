<?php

require_once 'base.php';

$query = 'UPDATE users SET is_admin = :is_admin, updated_at = :updated_at  WHERE email = :email';

$sth = $dbh->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);

$sth->execute([
	'is_admin'   => 0,	
	'updated_at' => date('Y-m-d H:i:s'),
	'email' => 'ewimbridge0@mail.ru'
]);