<?php

$link = "uploads/ordenacao_dos_anexos.png";

// file_get_contents também pode receber uma url de arquivo como parâmetro.
$fileContent = file_get_contents($link);

$infomationFile = parse_url($link);

$basenameFile = basename($infomationFile['path']);

$file = fopen($basenameFile, "w+");

fwrite($file, $fileContent);

fclose($file);
?>

<img src="<?=$basenameFile?>" alt="Arquivo"/>