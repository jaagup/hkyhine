<!doctype html>
<html>
  <head>
    <title>Omaduste n�itamise leht</title>
  </head>
  <body>
    <h1><?php echo $_REQUEST["eesnimi"]; ?></h1>
	
	<?php
	  echo $_REQUEST["eesnimi"]." on ".join(", ", $_REQUEST["omadused"]);
	?>
  </body>
</html>