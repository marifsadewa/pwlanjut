<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="#" method="POST">
	
</form>


<?php
if(isset($_POST['submit2'])){
	for ($i=0; $i < $_POST['nama']; $i++) { 
			echo "Nama Penumpang : ".$_POST['nama']."<br>";
		}
		
		

	}
if(isset($_POST['submit'])){
		echo "Tujuan : ".$_POST['Tujuan']."<br>";
		echo "Jam : ".$_POST['jam']."<br>";

	}


?>

</body>
</html>