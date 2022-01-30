<?php

spl_autoload_register(function (string $nomeClasse) {
    $caminhoDoArquivo = "Classes" . DIRECTORY_SEPARATOR . $nomeClasse . ".php";
    if (file_exists($caminhoDoArquivo) === true) {
        require_once($caminhoDoArquivo);
    }
});

spl_autoload_register(function (string $nomeClasse) {
    $caminhoDoArquivo = "Classes" . DIRECTORY_SEPARATOR . "Abstracts" . DIRECTORY_SEPARATOR . $nomeClasse . ".php";
    if (file_exists($caminhoDoArquivo) === true) {
        require_once($caminhoDoArquivo);
    }
});

spl_autoload_register(function (string $nomeClasse) {
    $caminhoDoArquivo = "Classes" . DIRECTORY_SEPARATOR . "Interfaces" . DIRECTORY_SEPARATOR . $nomeClasse . ".php";
    if (file_exists($caminhoDoArquivo) === true) {
        require_once($caminhoDoArquivo);
    }
});
