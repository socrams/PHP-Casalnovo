Confeccionar una pagina que muestre un contrato dentro de un textarea, disponer puntos suspensivos
donde el operador debe ingresar un texto. La pagina que procesa el formulario solo debe mostrar el
contrato con las modificaciones que hizo el operador.

<html>

<head>
    <title>Ejercicio 14</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>

<body>





    <form style="margin-left: 6px" enctype="multipart/form-data" method="POST">
        <h1>TextArea</h1>
        <textarea name="contrato" id="contrato" cols="100" rows="8">
        En la ciudad de [……], se acuerda entre la Empresa [……] representada por el Sr. [……] en su carácter
        de Apoderado, con domicilio en la calle [……] y el Sr. [……], futuro empleado con domicilio en [……],
        celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93,
        94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
        </textarea>
        <br>
        <button type="submit" onclick=this.form.action="ejer14-text.php">aceptar</button>
    </form>
</body>

</html>