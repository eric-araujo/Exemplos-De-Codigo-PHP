<?php

require_once 'autoload.php';

$supra = new Supra();

echo $supra->ligar(true);
echo $supra->acelerar(40);
echo $supra->frenagem(2);