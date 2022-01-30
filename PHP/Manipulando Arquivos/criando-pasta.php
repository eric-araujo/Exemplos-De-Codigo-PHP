<?php

function createFolderInSourceDirectory(string $folderName): void
{
   if(is_dir($folderName)){
      die("Já existe o diretório {$folderName}");
   }

   mkdir($folderName);
   die("Diretório {$folderName} criado com sucesso!");
}

createFolderInSourceDirectory("images");