<html>
<head>
    <title>Ejercicio 11</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>
    <body>
        <form style="margin-left: 6px" enctype="multipart/form-data">
            <h1>Formulario</h1>
            <input type="text" placeholder="nombre" name="nombre" required="">
            <br>
            <input type="radio" name="radio" value="0" >
            No tiene estudios <br>
            <input type="radio" name="radio" value="1">
            Estudios primarios<br>
            <input type="radio" name="radio" value="2">
            Estudios secundarios <br>
            <button type="submit"  onclick=this.form.action="ejer11-formu.php">aceptar</button>
        </form>
    </body>
</html>