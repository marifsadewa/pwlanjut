<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>


<body>

<?php
	$motor=
	[
		["scopy"=>
			["warna"=>"Putih","tahun"=>"2018","cc"=>"150"]
		]
		
		,"beat"
		,"vario"
	];
	//foreach ($motor as $key => $value) {
		//echo "-: ".$key."-: ".$value;
	//}
	//echo count($motor);

	//var_dump($motor);
	//print_r($motor);

	arsort($motor);
	echo '<pre>'; var_dump($motor);

?>

</body>
</html>