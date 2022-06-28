<html>
<?php
$nombre=$_GET["nombre"];
$edad=$_GET["edad"];
if ($edad>=18) {$mensaje="mayor";} else { $mensaje="menor";};
?>
   <h1> <p class="lead"><?php echo "Estimado/a ".$nombre." usted tiene ".$edad. " por lo tanto es ".$mensaje ?>
    </p></h1>

</html>