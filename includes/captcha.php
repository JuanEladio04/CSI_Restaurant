<?php
session_start();

$permitted_chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ0123456789';

function generate_string($input, $strength = 6) {
    $input_length = strlen($input);
    $random_string = '';
    for ($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

$image = imagecreatetruecolor(200, 50);
imageantialias($image, true);

$colors = [];
$red = rand(100, 255);    
$green = rand(150, 255); 
$blue = rand(100, 255);    

for ($i = 0; $i < 5; $i++) {
    $colors[] = imagecolorallocate($image, $red - 20 * $i, $green - 20 * $i, $blue - 20 * $i);
}

imagefill($image, 0, 0, $colors[0]);

for ($i = 0; $i < 10; $i++) {
    imagesetthickness($image, rand(2, 10));
    $line_color = $colors[rand(1, 4)];
    imagerectangle($image, rand(-10, 190), rand(-10, 10), rand(-10, 190), rand(40, 60), $line_color);
}

$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);
$textcolors = [$black, $white];

$fonts = [dirname(__FILE__) . '/fonts/Acme-Regular.ttf', dirname(__FILE__) . '/fonts/Ubuntu-Regular.ttf', dirname(__FILE__) . '/fonts/COMICATE.TTF', dirname(__FILE__) . '/fonts/grasping.ttf', dirname(__FILE__) . '/fonts/horrendo.ttf', dirname(__FILE__) . '/fonts/OLDFAX.TTF', dirname(__FILE__) . '/fonts/sewer.ttf'];

$string_length = 6;
$captcha_string = generate_string($permitted_chars, $string_length);

$_SESSION['captcha_text'] = $captcha_string;

for ($i = 0; $i < $string_length; $i++) {
    $letter_space = round(170.0 / $string_length);
    $initial = 15;

    // Distorsiones más agresivas al texto
    $angle = rand(-30, 30);
    $x = $initial + $i * $letter_space + rand(-10, 10); // Variación en la posición
    $y = rand(20, 40) + rand(-10, 10); // Variación en la posición

    // Cambiar la posición y el tamaño del texto
    $font_size = rand(20, 30);
    $font = $fonts[array_rand($fonts)];

    imagettftext($image, $font_size, $angle, $x, $y, $textcolors[rand(0, 1)], $font, $captcha_string[$i]);
}

// Añadir ruido aleatorio al fondo
for ($i = 0; $i < 300; $i++) {
    imagesetpixel($image, rand(0, 200), rand(0, 50), $colors[rand(0, 4)]);
}

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
