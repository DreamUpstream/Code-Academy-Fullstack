<?php
// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('watermark.png');
$im = imagecreatefromjpeg('background.jpeg');

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 10;
$marge_bottom = 10;

$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// Allocate A Color For The Text
$black = imagecolorallocate($im, 0, 0, 0);

// Set Path to Font File
$font_path = './open-sans/OpenSans-Semibold.ttf';

// Set Text to Be Printed On Image
$text = "This is rabbit!";

// Print Text On Image
imagettftext($im, 25, 0, 25, 100, $red, $font_path, $text);

// Output and free memory
header('Content-type: image/png');
$randLoc = "/profiles\/" + rand();
imagepng($im, $randLoc);
?>