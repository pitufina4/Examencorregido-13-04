<?php


class Pedido {
    
    private $fecha;
    private $importetotal;

    public function __construct ($fecha,$importetotal) {
        $this->fecha =$fecha;
        $this->importetotal =$importetotal; 
    }
    function setFecha ($fecha) {
        $this->fecha= $fecha;
    }
    function getFecha() {
        return $this->fecha;
    }
    function setImportetotal ($importetotal) {
        $this->importetotal= $importetotal;
    }
    function getImportetotal() {
        return $this->importetotal;
    }
    function mostrar () {
       
        echo "Fecha :".$this->getFecha();
        echo "<br>";
        echo "Importetotal :".$this->getImportetotal();
        echo "<br>";

    }
}