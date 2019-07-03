<?php

class CSlider {
    private $modelo;
    public function __construct() {
        $this->modelo= new MSlider();
    }
   
    
    public function subirNuevoSlider($imagen, $titulo, $informacion){
        copy($imagen["tmp_name"], "../multimedia/".$imagen["name"]);
        $this->modelo->agregarSlider("multimedia/".$imagen["name"], $titulo, $informacion);
    }
}
