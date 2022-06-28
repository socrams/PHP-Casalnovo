Confeccionar un formulario que solicite la carga del nombre de una persona y que permita seleccionar
una serie de deportes que practica (futbol, basket, tennis, voley).
Mostrar en la pagina que procesa el formulario la cantidad de deportes que practica
<html>
<head>
    <title>Ejercicio 12</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>
    <body>
        <form style="margin-left: 6px" enctype="multipart/form-data">
            <h1>Formulario deporte</h1>
            <input type="text" placeholder="nombre" name="nombre" required="">
            <br>
            <input type="checkbox" name="futbol" valu="1" >
            futbol<br>
            <input type="checkbox" name="basket" value="1">
            basket<br>
            <input type="checkbox" name="tenis" value="1">
            tenis<br>
            <input type="checkbox" name="voley" value="1">
            voley<br>
            <button type="submit"  onclick=this.form.action="ejer12-deporte.php">aceptar</button>
        </form>
    </body>
</html>