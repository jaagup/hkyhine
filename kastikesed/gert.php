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
	     <li><input type="checkbox" name="omadused[]" value="suur"/>Suur</li>
	     <li><input type="checkbox" name="omadused[]" value="õhuke"/>Õhuke</li>
	     <li><input type="checkbox" name="omadused[]" value="pizza"/>Pizza</li>
	     <li><input type="checkbox" name="omadused[]" value="malbe"/>Malbe</li>
	     <li><input type="checkbox" name="omadused[]" value="aeglane"/>Aeglane</li>
	     <li><input type="checkbox" name="omadused[]" value="võiduhimuline"/>Võiduhimuline</li>
	   </ul>
	   <input type="submit" value="Vaata" />
	</form>
  </body>
</html>