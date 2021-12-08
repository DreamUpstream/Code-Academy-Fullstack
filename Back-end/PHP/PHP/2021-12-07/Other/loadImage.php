<?php

// http://localhost:8081/2021-12-07/loadImage.php?date=2021-12-07&name=7ZHu1vQx6K2NdL01.png
// http://localhost:8081/2021-12-07/loadImage.php?name=7ZHu1vQx6K2NdL01.png

define('UPLOAD_DIR', '/home/code-academy/uploads');

if (isset($_GET['name'])) {
	$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
	$date = str_replace('-', '/', $date);

	$file = sprintf('%s/%s/%s', UPLOAD_DIR, $date, $_GET['name']);

	if (is_file($file)) {
		header('Content-Type: ' . mime_content_type($file));
		header('Content-Length: ' . filesize($file));

		readfile($file);
	} else {
		http_response_code(404);
	}

	exit;
}