Definir un vector con los nombres de los dias de la semana. Luego imprimir el primero y el ultimo
elemento del vector
<html>
<head>
    <title>Ejercicio 14</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>

<body>
    <form style="margin-left: 6px" enctype="multipart/form-data">
    <?php 
    $dias = array("domingo","lunes","martes","miércoles","jueves","viernes","sábado");
    for ($i=0; $i < 7 ; $i++) { 
        echo $dias[$i]."<br>";
    }
    ?>     
    </form>
</body>

</html>