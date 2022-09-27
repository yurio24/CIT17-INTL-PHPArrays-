<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	 	<title>Top Cities</title>
</head>
<body>

		
			<?php
		    
		    $Cities = array(

		    	"Tokyo", 
		    	"Mexico City", 
		    	"New York City", 
		    	"Mumbai", 
		    	"Seoul", 
		    	"Shanghai", 
		    	"Lagos", 
		    	"Buenos Aires", 
		    	"Cairo", 
		    	"London"

		    			);

		    foreach($Cities as $cit) {
		        echo "$cit, ";
		    }
		    
		    sort($Cities);
		    
		    echo "<ul>";
		    foreach($Cities as $cit){
		        echo "$cit.<br>";
		    }
		    echo "</ul>";
		    
		    array_push($Cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
		    
		    echo "<ul>";
		    foreach($Cities as $cit){
		        echo "$cit.<br>";
		    }
		    echo "</ul>";
		    ?>

</body>
</html>