
<?php
	$nombre=$_GET['nombre'];
	$direccion=$_GET['direccion'];
	$jyqc="Ninguna";
	if (isset($_GET['jyq']))
	{$jyqc=$_GET['jyqc'];}
	$napoc="Ninguna";
	if (isset($_GET['napo']))
	{$napoc=$_GET['napoc'];}
	$mozac="Ninguna";
	if (isset($_GET['moza']))
	{$mozac=$_GET['mozac'];}
	$archivoPedidos="datos.txt";
	// $renglon = $nombre."=>".$direccion."=>".$jyqc."=>".$napoc."=>".$mozac."\n";
	$renglon ="a Nombre: ".$nombre."| Direccion: ".$direccion."| JyQ: ".$jyqc."| Napo: ".$napoc."| Muzza: ".$mozac."\n";
	$archivo1= fopen($archivoPedidos, "a");
	fwrite($archivo1,$renglon);
	fclose($archivo1);
	include "ejer17.php";
?>
	<h1>Pedido Realizado</h1>
	<a href="ejer16.php">VOLVER</a>
	
</html>