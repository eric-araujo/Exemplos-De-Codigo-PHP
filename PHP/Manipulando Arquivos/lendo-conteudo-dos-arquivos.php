<?php

function readCsvFile(string $filename): array
{
    if(!file_exists($filename)){
        die("Arquivo não existe!");
    }

    $file = fopen($filename, "r");

    $headers = fgets($file);
    $headerInArrayFormat = explode(",", $headers);
    
    $fileData = getDataFromCsvFile($file, $headerInArrayFormat);

    fclose($file);

    return $fileData;
}

function getDataFromCsvFile(mixed $file, array $headerInArrayFormat): array
{
    $fileData = array();

    while($fileRow = fgets($file)){
        $rowDate = explode(",", $fileRow);
        $lineData = getLineDataFromCsvFile($headerInArrayFormat, $rowDate);

        array_push($fileData, $lineData);
    }

    return $fileData;
}

function getLineDataFromCsvFile(array $headerInArrayFormat, array $rowDate): array
{
    $lineData = array();

    for($counter = 0; $counter < count($headerInArrayFormat); $counter++){
        $lineData[$headerInArrayFormat[$counter]] = $rowDate[$counter];
    }

    return $lineData;
}

$fileData = readCsvFile("usuarios.csv");

echo json_encode($fileData);