<?php
 // dht11.php
 //Importamos la configuracion
 require("config.php");
 // Leemos los valores que nos llegan por GET
 $Temperatura = $_GET['Temperatura'];
 $Humedad = $_GET['Humedad'];

$sql="INSERT INTO humedad (humedad) VALUES ('$Humedad')";
mysqli_query($con,$sql);
$sql2="INSERT INTO temperatura (temperatura) VALUES ('$Temperatura')";
mysqli_query($con,$sql2);


 echo "Pagina para subir los datos<br />";
 echo "<br />Temperatura = $Temperatura ºC<br />";
 echo "<br />Humedad = $Humedad %<br />";

?>
