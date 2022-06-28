Confeccionar un programa que muestre el archivo de pedido de pizzas via internet anteriormente
creado. (Obligatoriamente dar el nombre de archivo de texto como “datos.txt”).

<html>
    <title>Pedidos</title>
    <form action="submit">
        
    </form>

   <?php
    $archivo = fopen("datos.txt", "r");

    // Recorremos todas las lineas del archivo
    while (!feof($archivo)) {
        // Leyendo una linea
        $traer = fgets($archivo);
        // Imprimiendo una linea
        $i=0;
        echo "Pedido ".nl2br($traer);
    }
    // Cerrando el archivo
    fclose($archivo);





   
//    function LeerArchivo($NomArchivo)
//     {
// 	$matrizDeRetorno=array();
// 	$archivo=fopen($NomArchivo,"r"); 
// 	while (!feof($archivo))
// 	{
// 		$renglon=fgets($archivo);
// 		$registroActual=explode("=>", $renglon);
// 		if(isset($registroActual[1]))
// 		{
// 			$matrizDeRetorno[]=$registroActual;
// 		}
// 	}
// 	fclose($archivo);
// 	return $matrizDeRetorno;
// }


   ?>
</html>