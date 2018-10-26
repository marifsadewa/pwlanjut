<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	$pwl=["toni"=>"80","dewi"=>"90","nina"=>"75","reza"=>"60"];
	$ai=["toni"=>"60","dewi"=>"70","nina"=>"95","reza"=>"50"];
	$sbd=["toni"=>"75","dewi"=>"75","nina"=>"80","reza"=>"70"];


	asort($pwl);
	asort($ai);
	asort($sbd);
	echo '<pre>'; var_dump($pwl,$ai,$sbd);


	echo "<br><br>";

	$sum=array_sum($pwl)/4;
	echo "nilai PWL : ".$sum."<br>";

	$sum=array_sum($ai)/4;
	echo "nilai AI : ".$sum."<br>";

	$sum=array_sum($sbd)/4;
	echo "nilai SBD : ".$sum."<br>";




?>


</body>
</html>