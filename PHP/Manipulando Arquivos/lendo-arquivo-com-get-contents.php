<?php

$filename = "images/html5.png";

$fileFormatBinary = file_get_contents($filename);
$fileFormatBase64 = base64_encode($fileFormatBinary);

$fileInformation = new finfo(FILEINFO_MIME_TYPE);
$mimeType = $fileInformation->file($filename);

$fileLinkBase64 = "data:{$mimeType};base64,{$fileFormatBase64}";

echo "<embed src='{$fileLinkBase64}' width='700' heigth='500'></embed>";