<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>

<form action="tiket.php" method="POST">
<fieldset><legend>Ticket Online</legend>
Tujuan : <select name="Tujuan">
	<option value="Jktsmg">Jakarta-Semarang</option>
	<option value="Jkteropa">Jakarta-Eropa</option>
	<option value="Jktarab">Jakarta-Arab</option>
</select>
<br>
Jam Keberangkatan : <input type="radio" name="jam">8.00
					<input type="radio" name="jam">9.00
					<input type="radio" name="jam">10.00
<br>
Jumlah Penumpang : <input type="number" name="penumpang">
<br>
<input type="submit" name="submit" value="Next">
<input type="reset" name="reset" value="Reset">
<br>
</fieldset>
</form>


<?php

?>

</body>
</html>