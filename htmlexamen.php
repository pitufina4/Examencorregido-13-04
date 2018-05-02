<?php

require_once ("Clienteex.php");

    $vector = array();

    $vector[] = new Cliente ("Juan", 19);
    $vector[] = new Cliente ("Pedro", 20);
    $vector[] = new Cliente ("Laura", 35);

    $vector[0]->altapedido( new Pedido ("13-10-2018", 50) );
    $vector[0]->altapedido( new Pedido ("13-09-2018", 23) );

    $vector[1]->altapedido( new Pedido ("13-10-2018", 150) );
    $vector[1]->altapedido( new Pedido ("13-11-2018", 25) );

    $vector[2]->altapedido( new Pedido ("13-10-2018", 50) );
    $vector[2]->altapedido( new Pedido ("13-12-2018", 70) );
/*
    $vector[] = new Pedido ("13-10-2018","37.5");
    $vector[] = new Pedido ("Laura",35,"205");
*/
/*require_once("persona.php");
require_once("cliente.php");
require_once("pedidos.php");

$vector = array($p1,$p2,$p3);

$p1 = new Persona ("Juan",19,"103.28");
$p2 = new Persona ("Pedro",20,"97.10");
$p3 = new Persona ("Laura",35,"205");

$ped1 = new Pedido("13-10-2018","37.5");
$ped2 = new Pedido("11-09-2017","105.3");

$p1->anadirPedido($ped1);
$p1->anadirPedido($ped2);
$p2->anadirPedido($ped1);
$p2->anadirPedido($ped2);
$p3->anadirPedido($ped1);
$p3->anadirPedido($ped2);

echo"<pre>";
print_r($p1);
print_r($p2);
print_r($p3);
print_r($ped1);
print_r($ped2);
echo"</pre>";
*/

?>
<!doctype html>

<html lang="en">

  <head>
      <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>

  <body>

      <header>
        <img src="Logos/transmed.jpg" alt="Transmediterranea" height="120">
      </header>

        <div id="uno">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <p>LISTADO DE CLIENTES</p>
                            <ol>
                                <?php for ($i=0; $i < count($vector); $i++) { 
                                    echo "<li>".$vector[$i]->getNombre()." ".$vector[$i]->getEdad()." ".$vector[$i]->getTotalPedidos()." €"."</li>";
                                }
                                ?>
                            </ol>
                    </div>

                    <div class="col-md-3">
                        <form action="Formulario.php" target="_blank">
                            <center>
                                <button type="submit" class="btn btn-danger">Rellenar Formulario</button>
                            </center>
                        </form>
                            
                    </div>
                </div>
            </div>
        </div>
        
        <footer>

        </footer>   
            
          
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="app.js"></script>

</body>

</html>





