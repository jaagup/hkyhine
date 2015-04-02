<!doctype html>
<html>
	<head>
		<title>Omaduste loetelu</title>
	</head>
	<body>
		<form action="naitaja.php">
			Palun eesnimi: <input type="text" name="eesnimi" /><br />
			Vali talle sobivad omadused:
			<ul>
				<li><input type="checkbox" name="omadused[]" value="ilus"/>Ilus
				<li><input type="checkbox" name="omadused[]" value="tark"/>Tark
				<li><input type="checkbox" name="omadused[]" value="osav"/>Osav
				<li><input type="checkbox" name="omadused[]" value="kaunis"/>Kaunis
				<li><input type="checkbox" name="omadused[]" value="käbe"/>Käbe
				<li><input type="checkbox" name="omadused[]" value="kaval"/>Kaval
			</ul>
		</form>
	</body>
</html>
