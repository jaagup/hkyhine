<!doctype html>
<html>
<head>
	<title>Omaduste loetelu</title>
	<meta charset="utf-8">
	<style type="text/css">
		html, body {
			background: #eee;
			color: #222;
			margin: 0;
			padding: 0;
			width: 100%;
		}

		li:hover {
			background: #333;
			color: #eee;
		}
	</style>
</head>
<body>
	<form action="naitaja.php">
		Eesnimi: <input type="text" name="eesnimi" /><br />
		Vali talle sobivad omadused:
		<ul>
			<li><input type="checkbox" name="omadused[]" value="ilus" />Ilus</li>
			<li><input type="checkbox" name="omadused[]" value="tark" />Tark</li>
			<li><input type="checkbox" name="omadused[]" value="osav" />Osav</li>
			<li><input type="checkbox" name="omadused[]" value="käbe" />Käbe</li>
			<li><input type="checkbox" name="omadused[]" value="kaval" />Kaval</li>
		</ul>
	</form>
</body>
</html>
