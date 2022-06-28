<html>
    <?php
        $nombre=$_GET["nombre"];
        $combo= $_GET["combo"];
        switch ($combo) {
            case 'value1': $mensaje = "no paga impuestos";break;
            case 'value2': $mensaje = "no paga impuestos";break;
            case 'value3': $mensaje = "debe pagar impuestos";break;
       
        }
    ?>
   <h1> <p class="lead">
    <?php echo "Estimado/a ".$nombre." segun lo seleccionado usted ".$mensaje;
    ?>
    </p></h1>


</html>