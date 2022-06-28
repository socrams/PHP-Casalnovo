Confeccionar un programita en PHP que permita hacer el pedido de pizzas via internet.
El formulario debe ser:
Nombre: [……………]
Direccion: [……………]
Jamon y queso [x]
Cantidad […..]
Napolitana [x]
Cantidad […..]
Mozzarella [x]
Cantidad […..]
[Confirmar]
Para el ingreso del nombre, direccion y cantidad de pizzas de cada tipo disponer objetos de la clase
“text”. Disponer tres objetos de tipo “check” para seleccionar los tipos de pizzas.
Por ultimo disponer un boton para el envio de datos: “submit”.
Grabar en un archivo de texto cada pedido, separados por una linea de puntos (obligatoriamente dar el
nombre de texto como “datos.txt”, esto es para que no se llene el disco duro de archivos.

<html>
    <title>Pedidos</title>
    <form style="margin-left: 6px" enctype="multipart/form-data"><br>
        <h1>Pedidos </h1><br>
        <input type="text" name="nombre" placeholder="Nombre"><br><br>
        <input type="text" name="direccion" placeholder="Direccion"><br><br>
        <input type="checkbox" name="jyq" > Jamon y Queso<br>
        <input type="text" name="jyqc" placeholder="Ingrese cantidad"><br><br>
        <input type="checkbox" name="napo"> Napolitana<br>
        <input type="text" name="napoc" placeholder="Ingrese cantidad"><br><br>
        <input type="checkbox" name="moza"> Mozzarela<br>
        <input type="text" name="mozac" placeholder="Ingrese cantidad"><br><br>
        <button type="submit" onclick=this.form.action="ejer16-pedidos.php">PEDIR</button>
    </form>
</html>