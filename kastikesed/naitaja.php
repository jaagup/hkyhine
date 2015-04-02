<!doctype html>
<html>
  <head>
    <title>Omaduste näitamise leht</title>
  </head>
  <body>
    <h1><?php echo $_REQUEST["eesnimi"]; ?></h1>
	
	<?php
	 if(isSet($_REQUEST["omadused"])){
	  echo $_REQUEST["eesnimi"]." on ".join(", ", $_REQUEST["omadused"]);
	 } else {
	  echo "Omadusi pole valitud".
	 }
	?>
  </body>
</html>