Confeccionar un formulario que solicite el ingreso del nombre de una persona y un combo de selección
(en este ultimo permitir la selección de los ingresos anuales de la persona: 1-1000, 1001-3000, >3000).
En la pagina que procesa el formulario mostrar un mensaje si debe pagar impuestos a las ganancias (si
supera 3000)
<html>

<head>
    <title>Ejercicio 13</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>

<body>
    <form style="margin-left: 6px" enctype="multipart/form-data">
        <h1>Formulario deporte</h1>
        <input type="text" placeholder="nombre" name="nombre" required="">
        <br><br>

        <select name="combo" id="1">
            <option value="value1">1-1000</option>
            <option value="value2">1001-3000</option>
            <option value="value3">Myor a 3000</option>
        </select>
        <br><br>
        <button type="submit" onclick=this.form.action="ejer13-combo.php">aceptar</button>
    </form>
</body>

</html>