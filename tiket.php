<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="hasil.php" method="POST">
<?php
if(isset($_POST['submit'])){
		for ($i=0; $i < $_POST['penumpang']; $i++) { 
			echo "Nama Penumpang : <input type='text' name='nama' placeholder='Ketikkan Nama'><br>";
		}
	}
	
?>

<br>
<input type="submit" name="submit2" value="Submit">
<input type="reset" name="reset" value="Reset">
	

</form>


</body>
</html>