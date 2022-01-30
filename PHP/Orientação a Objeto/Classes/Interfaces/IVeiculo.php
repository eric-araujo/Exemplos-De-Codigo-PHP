<?php

interface IVeiculo
{
    public function acelerar(int $velocidadeASerAcelerada):string;
    public function frenagem(int $intensidadeDaFrenagem):string;
    public function ligar(bool $ligarVeiculo = false):string;
}