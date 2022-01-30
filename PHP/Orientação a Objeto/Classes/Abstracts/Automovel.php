<?php

abstract class Automovel implements IVeiculo
{
    public function acelerar(int $velocidadeASerAcelerada): string
    {
        if(empty($velocidadeASerAcelerada)) {
            return "Necessário informar a velocidade que o veículo deve chegar! </br>";
        }

        return "O veículo atingiu a velocidade de {$velocidadeASerAcelerada} km/h </br>";
    }

    public function frenagem(int $intensidadeDaFrenagem): string
    {
        if(empty($intensidadeDaFrenagem)) {
            return "Intensidade da frenagem não foi informada </br>";
        }

        return "O veículo freiou em uma intensidade de {$intensidadeDaFrenagem} </br>";
    }

    public function ligar(bool $ligarVeiculo = false): string
    {
        if($ligarVeiculo) {
            return "Veículo ligado! </br>";
        }

        return "Veículo desligado </br>";
    }
}