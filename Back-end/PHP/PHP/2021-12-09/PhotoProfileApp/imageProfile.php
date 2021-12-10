<?php
require_once 'upload.php';

// Load the stamp and the photo to apply the watermark to
$handlers = array(
    'jpg'  => 'imagecreatefromjpeg',
    'jpeg' => 'imagecreatefromjpeg',
    'png'  => 'imagecreatefrompng',
    'gif'  => 'imagecreatefromgif'
);
$extension = strtolower(substr($profilePicture, strrpos($profilePicture, '.')+1));
if ($handler = $handlers[$extension]){
    $stamp = $handler($profilePicture);
}
$im = imagecreatefrompng('resources/background.png');

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 345;
$marge_bottom = 750;

$stamp = imagescale($stamp, 270, 270);
// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, imagesx($im) - $marge_right, imagesy($im) - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// Allocate A Color For The Text
$black = imagecolorallocate($im, 0, 0, 0);

// Set Path to Font File
$font_path = 'resources/open-sans/OpenSans-Semibold.ttf';

// Set Text to Be Printed On Image
$name = $_POST['nameSurname'];
$email = $_POST['email'];
$city = $_POST['city'];
$comment = $_POST['comment'];
$languages = explode(",", $_POST['languages']);

// Print Text On Image
if (strlen($name) > 19)
imagettftext($im, 25, 0, 25, 390, $black, $font_path, $name);
else if (strlen($name) > 13){
    imagettftext($im, 25, 0, 60, 390, $black, $font_path, $name);
}
else {
    imagettftext($im, 25, 0, 130, 390, $black, $font_path, $name);
}

imagettftext($im, 14, 0, 155, 500, $black, $font_path, $email);
imagettftext($im, 14, 0, 225, 530, $black, $font_path, $city);
$height = 620;
$i = 0;
foreach ($languages as &$value) {
    if ($value) {
        imagettftext($im, 14, 0, 180, $height + $i, $black, $font_path, "• " . $value);
        $i += 30;
    }
}
if (strlen($comment) > 62) {
    imagettftext($im, 13, 0, 80, 752, $black, $font_path, "Tekstas per ilgas. Sutrumpinkite.");
}
else if (strlen($comment) < 31) {
    imagettftext($im, 13, 0, 80, 752, $black, $font_path, $comment);
}
else {
    $output[0] = substr($comment, 0, 31);
    $output[1] = substr($comment, 31, strlen($comment));
    imagettftext($im, 13, 0, 80, 752, $black, $font_path, $output[0]);
    imagettftext($im, 13, 0, 80, 786, $black, $font_path, $output[1]);
}
    

// Output
header('Content-type: image/png');
$randLoc = "profiles/" . date("Ymd") . rand() . ".png";
imagepng($im, $randLoc);
echo $randLoc;

?>