<?php  
	require("config.php");
	$sql3="SELECT temperatura,fecha FROM temperatura";
	$res=mysqli_query($con,$sql3);
	$x=array();
	$y=array();
	while ($ver=mysqli_fetch_row($res)) {
		$y[]=$ver[0];
		$x[]=$ver[1];
	}
	$datx=json_encode($x);
	$daty=json_encode($y);
	$sql4="SELECT humedad,fecha FROM humedad";
	$res2=mysqli_query($con,$sql4);
	$x2=array();
	$y2=array();
	while ($ver2=mysqli_fetch_row($res2)) {
		$y2[]=$ver2[0];
		$x2[]=$ver2[1];
	}
	$datx2=json_encode($x2);
	$daty2=json_encode($y2);
?>