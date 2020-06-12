<?php require_once"ex.php";
?>
<head>
	<link rel="apple-touch-icon" sizes="57x57" href="Librerias/icono/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="Librerias/icono/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="Librerias/icono/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="Librerias/icono/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="Librerias/icono/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="Librerias/icono/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="Librerias/icono/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="Librerias/icono/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="Librerias/icono/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="Librerias/icono/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="Librerias/icono/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="Librerias/icono/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="Librerias/icono/favicon-16x16.png">
	<link rel="manifest" href="Librerias/icono/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="Librerias/icono/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta http-equiv="refresh" content="60">
	<script src='Librerias/plotly.js'></script>
	<link rel="stylesheet" type="text/css" href="Librerias/bootstrap/css/bootstrap.css">
</head>
<title>Temperatura y humedad</title>
<body>
		<div id='myDiv'></div>
		<label>Temperatura en C° y Humedad en %</label>
</body>
<script type="text/javascript">	
	dax=<?php echo $datx?>;
	day=<?php echo $daty?>;
	dax2=<?php echo $datx2?>;
	day2=<?php echo $daty2?>;

var temperatura = {
  x: dax,
  y: day,
  type: 'scatter',
  name:'Temperatura'
  };
var humedad = {
  x: dax2,
  y: day2,
  type: 'scatter',
  name:'Humedad'
};

var data = [temperatura,humedad];

Plotly.newPlot('myDiv', data);
</script>