<!DOCTYPE html>
<html>
<head>
	<title>Omadused</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="naitaja.php">
		Palun eesnimi: <input type="text" name="eesnimi" /><br />
		Vali talle sobivad omadused:
		<ul>
			<li><input type="checkbox" name="omadused[]" value="geniaalne">Geniaalne</li>
			<li><input type="checkbox" name="omadused[]" value="kahtlane">Kahtlane</li>
			<li><input type="checkbox" name="omadused[]" value="leidlik">Leidlik</li>
			<li><input type="checkbox" name="omadused[]" value="luuleline">Luuleline</li>
			<li><input type="checkbox" name="omadused[]" value="ummamoodu">Ummamoodu</li>
			<li><input type="checkbox" name="omadused[]" value="looamlik">Loomalik</li>
		</ul>
	</form>
</body>
</html>