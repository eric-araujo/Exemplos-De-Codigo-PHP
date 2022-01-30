<?php 

/*
## Códigos para permissão das pastas ##
 0 - Nenhuma permissão
 1 - Execução
 2 - Gravar
 3 - Executar e gravar
 4 - Leitura
 5 - Leitura e execução
 6 - Leitura e gravação
 7 - Leitura, gravação e execução
*/


$dir = "arquivos";
$permissao = 0444;

/*
    Ignorar o zero.

    O número 775 significa o seguinte:
        Dígito 1 - Permissão para o criador do arquivo
        Dígito 2 - Permissão para um grupo de usuários
        Dígito 3 - Permissão para visitantes
*/

if(!is_dir($dir)){
    mkdir($dir, $permissao);
    echo "Diretório criado com sucesso!";
}