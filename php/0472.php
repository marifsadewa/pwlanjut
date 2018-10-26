<!DOCTYPE html>
<html>
<head>
	<title>16.11.0472</title>
</head>
<body>
<?php 

echo "<h3>Menghitung Volume Bola</h3></br>";

function VolumeFunction($diameter){
define("phi", 3.14);
	$x=4/3;
	$r=$diameter/2;
	$y=$x*phi*$r*$r*$r;
print("Diameter-nya adalah $diameter </br>");
printf ("Volume-nya adalah %.2f</br>",$y);
echo "Phi ",phi;	
}

VolumeFunction(10);



echo "<h3>Tabung</h3></br>";

define("pi", 3.14);
function TabungFunction($dia,$tinggi){
	$selimut=pi*$dia*$tinggi;
printf ("Diameter-nya adalah $dia</br>");
printf ("Tinggi-nya adalah $tinggi</br>");		
printf ("Selimut-nya adalah %.2f </br>",$selimut);	
}

TabungFunction(20,15);
echo "Phi ",pi;



echo "<h3>Pembelian</h3></br>";

function BeliFunction($tbakso,$tsoto,$tteh,$tjeruk){
	static $bakso=12000, $soto=9000, $teh=2000, $jeruk=3000; 

	$total=$bakso+$soto+$teh+$jeruk;
	$tobakso=$tbakso*$bakso;
	$tosoto=$tsoto*$soto;
	$toteh=$tteh*$teh;
	$tojeruk=$tjeruk*$jeruk; 

print("Jumlah Bakso = $tbakso*$bakso = $tobakso </br>");
print("Jumlah Soto = $tsoto*$soto = $tosoto </br>");
print("Jumlah Teh = $tteh*$teh = $toteh</br>");
print("Jumlah jeruk = $tjeruk*$jeruk = $tojeruk</br>");

echo "total $total";


}

BeliFunction(1,1,1,1);
BeliFunction(5,5,5,5);


?>
</body>
</html>