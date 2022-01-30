<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="fileUpload">
        <button type="submit">Enviar Arquivo</button>
    </form>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] !== "POST"){
        die();
    }

    $file = $_FILES['fileUpload'];

    if(isset($file["error"]) && !empty($file['error'])){
        throw new Exception("Erro: {$file['error']}");
    }

    $uploadsDirectory = "uploads";

    if(!is_dir($uploadsDirectory)){
        mkdir($uploadsDirectory);
    }

    $fullPathToUploadDirectory = $uploadsDirectory . DIRECTORY_SEPARATOR . $file['name'];
    $validUpload = move_uploaded_file($file['tmp_name'], $fullPathToUploadDirectory);

    if(!$validUpload){
        throw new Exception("Não foi possível realizar o upload do arquivo {$file['name']}");
    }

    die("<h4>Upload do arquivo {$file['name']} realizado com sucesso!</h4>");
?>