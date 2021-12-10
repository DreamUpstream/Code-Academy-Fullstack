<?php

define('UPLOAD_DIR', dirname(__FILE__) . '/uploads');
define('ALLOWED_EXTENSION', ['png', 'jpg', 'jpeg', 'pdf']);

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$profilePicture = "resources/blankprofile.png";

if (isset($_FILES['photo'])) {
	$file = $_FILES['photo'];

	if ($file['error'] == UPLOAD_ERR_OK) {
		$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
		$ext = strtolower($ext);

		if (!in_array($ext, ALLOWED_EXTENSION)) {
			echo "File not alllowed";

			exit;
		}

		$name = generateRandomString(16);
		$date = date('Y/m/d');
		$path = UPLOAD_DIR . '/' . $date;

		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}

		$path = sprintf('%s/%s.%s', $path, $name, $ext);

		move_uploaded_file($file['tmp_name'], $path);
		// $profilePicture = str_replace('/home/code-academy/PHP', '', $path);
		$profilePicture = 'uploads' . '/' . $date . '/' . $name. '.' .$ext;
	}
}