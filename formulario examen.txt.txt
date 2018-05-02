
<h1>Recibe formulario</h1>
<?php


echo "Nombre: ".$_REQUEST["nombre"]."<br>";
echo "Apellidos: ".$_REQUEST["apellidos"]."<br>";
echo "Correo electronico: ".$_REQUEST["email"]."<br>";
echo "Contraseña: ".$_REQUEST["pw"]."<br>";
?>

<pre>

<?php
    print_r ($_REQUEST);


?>
</pre>