<html>
    <?php
        $nombre=$_GET["nombre"];
        $radio=$_GET["radio"];
        switch ($radio) {
            case '0': $mensaje = "no tiene estudios";break;
            case '1': $mensaje = "estudios primarios";break;
            case '2': $mensaje = "studios secundarios";break;
       
        }
    ?>
   <h1> <p class="lead"><?php echo "Estimado/a ".$nombre." usted selecciono la opcion ".($radio+1). " usted tiene ".$mensaje ?>
    </p></h1>


</html>