<?php

function createFile(string $filename): void
{
    verifyValidFile($filename);

    $file = fopen($filename, "w+");

    fwrite($file, "Hello World");
    fclose($file);

    echo "Arquivo {$filename} criado com sucesso!";
}

function removeFile(string $filename): void
{
    verifyValidFile($filename);
    
    unlink($filename);

    echo "Arquivo {$filename} removido com sucesso!";
}

function verifyValidFile(string $filename): void
{
    if(empty($filename)){
        die("Nome do arquivo não informado!");
    }
}