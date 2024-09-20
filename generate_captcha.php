<?php
session_start();

// Generate a random number and store it in the session
$rand_num = rand(11111, 99999);
$_SESSION['CODE'] = $rand_num;

// Create an image layer
$layer = imagecreatetruecolor(90, 30);

// Define colors
$captcha_bg = imagecolorallocate($layer, 255, 255, 100); // Background color
$captcha_text_color = imagecolorallocate($layer, 0, 0, 0); // Text color

// Fill the background
imagefill($layer, 0, 0, $captcha_bg);

// Set the path to your font file
$font_path = 'Roboto-Black.ttf'; 

// Add the text to the image
imagettftext($layer, 10, 0, 20, 20, $captcha_text_color, $font_path, $rand_num);

// Output the image
header('Content-Type: image/jpeg');
imagejpeg($layer);

// Clean up
imagedestroy($layer);
?>
