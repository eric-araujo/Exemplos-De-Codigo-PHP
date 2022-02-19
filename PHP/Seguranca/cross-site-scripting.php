<form method="POST">
    <input type="text" name="search"/>
    <button type="submit">Enviar</button>
</form>
<?php

if(!isset($_POST['search'])){
    die("Nenhum resultado encontrado!");
}

$convertHtmlTagsToText = htmlentities($_POST['search']);
die($convertTagsHtmlToText);