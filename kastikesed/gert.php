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
	     <li><input type="checkbox" name="omadused[]" value="suur"/>Ilus</li>
	     <li><input type="checkbox" name="omadused[]" value="õhuke"/>Tark</li>
	     <li><input type="checkbox" name="omadused[]" value="pizza"/>Osav</li>
	     <li><input type="checkbox" name="omadused[]" value="malbe"/>Kaunis</li>
	     <li><input type="checkbox" name="omadused[]" value="aeglane"/>Käbe</li>
	     <li><input type="checkbox" name="omadused[]" value="võiduhimuline"/>Kaval</li>
	   </ul>
	   
	</form>
  </body>
</html>