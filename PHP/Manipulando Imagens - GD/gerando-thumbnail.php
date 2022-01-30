<?php

header("Content-type: image/jpeg");

$filepath = "images" . DIRECTORY_SEPARATOR . "wallpaper.jpg";

$width = 800;
$height = 800;

list($oldWidth, $oldHeight) = getimagesize($filepath);

$newImage = imagecreatetruecolor($oldWidth, $oldHeight);
$oldImage = imagecreatefromjpeg($filepath);

imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $width, $height, $oldWidth, $oldHeight);

imagejpeg($newImage);

imagedestroy($oldImage);
imagedestroy($newImage);