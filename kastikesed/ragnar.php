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
				<li><input type="checkbox" name="omadused[]" value="ilus"/>Ilus<br />
				<li><input type="checkbox" name="omadused[]" value="tark"/>Tark<br />
				<li><input type="checkbox" name="omadused[]" value="osav"/>Osav<br />
				<li><input type="checkbox" name="omadused[]" value="kaunis"/>Kaunis<br />
				<li><input type="checkbox" name="omadused[]" value="käbe"/>Käbe<br />
				<li><input type="checkbox" name="omadused[]" value="kaval"/>Kaval<br />
			</ul>
		</form>
	</body>
</html>
