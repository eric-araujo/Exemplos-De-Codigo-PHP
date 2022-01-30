<?php

$directory1 = "folder_01";
$directory2 = "folder_02";
$filename = "README.txt";

createDirectory($directory1);
createDirectory($directory2);

$fullFilePath1 = returnFullFilePath($directory1, $filename);
$fullFilePath2 = returnFullFilePath($directory2, $filename);
writeToFile($fullFilePath1, date("Y-m-d H:i:s"));

moveFile($fullFilePath1, $fullFilePath2);
die("<h4>Arquivo {$filename} movido com sucesso!</h4><br/>Novo local do arquivo: {$fullFilePath2}");

function createDirectory(string $directory): void
{
    if (!is_dir($directory)) mkdir($directory);
}

function returnFullFilePath(string $directory, string $filename): string
{
    return $directory . DIRECTORY_SEPARATOR . $filename;
}

function verifyFileExists(string $fullFilePath): bool
{
    if (file_exists($fullFilePath)) {
       return true;
    }
    return false;
}

function writeToFile(string $fullFilePath, string $contentFile): void
{
    if(verifyFileExists($fullFilePath)) return;

    $file = fopen($fullFilePath, "w+");
    fwrite($file, $contentFile);
    fclose($file);
}

function moveFile(string $originPath, string $destinyPath): void
{
    rename(
        $originPath,
        $destinyPath
    );
}
