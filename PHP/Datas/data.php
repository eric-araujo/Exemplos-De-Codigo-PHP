<?php

$dt = new DateTime();

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
echo $dt->format('d/m/Y H:i:s');