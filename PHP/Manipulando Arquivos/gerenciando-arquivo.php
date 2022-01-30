<?php

$file = fopen("log.txt", "w+");

fwrite($file, "Hello World\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";