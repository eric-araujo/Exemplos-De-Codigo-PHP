<?php

$filepath = "images" . DIRECTORY_SEPARATOR . "certificado.jpg";

$image = imagecreatefromjpeg($filepath);

$titleColor = imagecolorallocate($image, 0, 0, 0);
$greyColor = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, utf8_decode("Eric Araújo Lima"), $titleColor);
imagestring($image, 3, 440, 370, date('d/m/Y'), $titleColor);

header('Content-type: image/jpeg');

imagejpeg($image, "certificado-".date('d-m-Y') . '-' . date('h-i-s').".jpeg", 100);

imagedestroy($image);
