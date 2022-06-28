<html>
    <?php
        $nombre=$_GET["nombre"];
        $practicaf="";
        $practicab="";
        $practicat="";
        $practicav="";
        if (isset($_GET['futbol'])) {$practicaf=" futbol";}
        if (isset($_GET['basket'])) {$practicab=" basket";}
        if (isset($_GET['tenis'])) {$practicat=" tenis";}
        if (isset($_GET['voley'])) {$practicav=" voley";}
    ?>
   <h1> <p class="lead">
    <?php echo "Estimado/a ".$nombre." realiza usted realiza los siguientes deportes<br>".$practicaf.$practicab.$practicat.$practicav
    ?>
    </p></h1>


</html>