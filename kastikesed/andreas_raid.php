<!DOCTYPE html>
<html>
<head>
	<title>Omadused</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="naitaja.php">
		<input type="text" name="eesnimi"><br />
		<ul>
			<li><input type="checkbox" name="omadused[]" value="ilus">Oh daaaaaayumm!</li>
			<li><input type="checkbox" name="omadused[]" value="tark">Tark</li>
			<li><input type="checkbox" name="omadused[]" value="osav">OsavLoom</li>
			<li><input type="checkbox" name="omadused[]" value="kaunis">Kaunis</li>
			<li><input type="checkbox" name="omadused[]" value="käbe">Ülikiire</li>
			<li><input type="checkbox" name="omadused[]" value="kaval">KavalRebane</li>
		</ul>
		<input type="submit" value="Go!">
	</form>
</body>
</html>