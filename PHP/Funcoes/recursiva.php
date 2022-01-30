<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    ),
                ),
            ),
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos',
                            ),
                        ),
                    ),
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                            ),
                            array(
                                'nome_cargo' => 'Supervisor de Valores Comerciais',
                                'subordinados' => array(
                                    array(
                                        'nome_cargo' => 'Assitente do Supervisor'
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    )
);

function exibeCargos(array $cargos): string
{
    $html = "<ul>";
    foreach($cargos as $cargo){
        $html .= "<li>{$cargo['nome_cargo']}</li>";

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibeCargos($cargo['subordinados']);
        }
    }
    $html .= "</ul>";

    return $html;
}

echo exibeCargos($hierarquia);