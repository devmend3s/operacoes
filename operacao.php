<?php

class Operacao{
    private $valor1; 
    private $valor2;

    //função para setar os valores
    public function setValor1($valor1){ 
        $this->valor1 = $valor1; 
    }
    public function setValor2($valor2){
        $this->valor2 = $valor2;
    }
    //função para pegar os valores
    public function getValor1(){
        return $this->valor1;
    }
    public function getValor2(){
        return $this->valor2;
    }
    //funções da calculadoras
    public function somar(){
        return $this->valor1 + $this->valor2;
    }
    public function subtracao(){
        return $this->valor1 - $this->valor2;
    }
    public function divisao(){
        return $this->valor1 / $this->valor2;
    }
    public function multiplicacao(){
        return $this->valor1 * $this->valor2;
    }
    public function exponenciacao(){
        return pow($this->valor1, $this->valor2);
    }
}
?>