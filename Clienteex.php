<?php

require_once ("Personaex.php");
require_once ("Pedidosex.php");

class Cliente extends Persona {
    private $pedidos;

    public function __construct ($nombre,$edad){
        parent::__construct ($nombre, $edad);
        $pedidos = array();
    }

    function getPedidos (){
        return $this->pedidos;
    }

    function setPedidos($pedidos){
        $this->pedidos = $pedidos;
    }

    public function altaPedido ($pedido){
        $this->pedidos[]=$pedido;
    }


    function getTotalPedidos () {
        $suma=0;
        for($i=0; $i < count($this->pedidos); $i++){
            $suma = $suma + $this->pedidos[$i]->getImportetotal();
        }
        return $suma;
    }

    /*function mostrar () {
        parent::mostrar();
        for($i=0; $i < count($this->pedidos); $i++){
            $this->pedidos[$i]->mostrar();
        }
        
    }
*/
}

?>