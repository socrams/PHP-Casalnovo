Crear un vector asociativo que almacena las claves de acceso de 5 usuarios de un sistema. Acceder a
cada componente por su nombre. Imprimir un componente por cada vector.

<html>
    <title>Pedidos</title>
    <form style="margin-left: 6px" enctype="multipart/form-data"><br>
        
    </form>
</html>

<?php
    $vectorAsociativo = array(
      'clave1' => '111',
      'clave2' => '222',
      'clave3' => '333',
      'clave4' => '444',
      'clave5' => '555',
    );
    echo "<br>".$vectorAsociativo['clave1'];
    echo "<br>".$vectorAsociativo['clave2'];
    echo "<br>".$vectorAsociativo['clave3'];
    echo "<br>".$vectorAsociativo['clave4'];
    echo "<br>".$vectorAsociativo['clave5'];
?>

 