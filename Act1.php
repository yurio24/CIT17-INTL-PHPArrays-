<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Weather-weather lang</title>
</head>
<body>

 		<?php
 		$weather = array(

 				"rain", 
 				"sunshine", 
 				"clouds", 
 				"hail", 
 				"sleet", 
 				"snow", 
 				"wind"

 						);

 		var_dump($weather);
 		?>

 	<h1 style="color: Red; font-weight: bold">Weather-weather lang</h1>
 		<?php echo "We've seen all kinds of weather this month. At the beginning of the month, we had "
 		 . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . 
 		 " and some  " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] . ". "; 
 		 ?>

</body>
</html>