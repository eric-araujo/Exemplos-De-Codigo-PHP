<?php

function showFileInformationFromFolder(string $folderName): void
{
    $filenames = scandir($folderName);

    foreach($filenames as $filename) {
        if(in_array($filename, array('.','..'))){
            continue;
        }

        $filePath = "images" . DIRECTORY_SEPARATOR . $filename;
    
        $fileInformation = returnFileInformation($filePath);

        var_dump($fileInformation);
    }
}

function returnFileInformation(string $filePath): array
{
    $filePathWithWindowsBar = str_replace("\\", "/", $filePath);

    $fileInformation = pathinfo($filePath);
    $fileInformation['size'] = filesize($filePath);
    $fileInformation['modified'] = date("d/m/Y H:i:s", filemtime($filePath));
    $fileInformation['url'] = "http://{$_SERVER['HTTP_HOST']}/{$filePathWithWindowsBar}";

    return $fileInformation;
}

showFileInformationFromFolder("images");