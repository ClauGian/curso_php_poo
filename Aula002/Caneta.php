<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar() {
        if ($this->tampada == true){
            echo '<p>ERRO! Não posso rabiscar. Caneta tampada</p>';
        }
        else {
            echo '<p>Estou rabiscando...A caneta não está tampada.</p>';
        }
        
    }
    
    function tampar() {
        $this->tampada = true;
    }
    
    function destampar(){
        $this->tampada = false;
    }
}
