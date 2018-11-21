<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>PHP Classes</title>
</head>
<body>
<h1>Welcome to my Car inventory page!</h1>
<h2>You are invited to add classes, properties and methods to make this web inventory program AWESOME!</h2>
<p>Before you commit your code always type "git pull" to get the latest changes!</p>
<p>More info to come...</p>
<?php
include 'car.php';
include 'wheel.php';

echo '<h3>Lets list our cars here!</h3>';
$car1 = new Car(5, True);

$gearType = ($car1->get_is_auto()) ? 'True' : 'False';
echo "My first car have " . $car1->get_nr_of_pax() . " passenger spots and the status for automatic gear is " . $gearType ;

echo '<br>';
$wheel1 = new Wheel(16, 20);
echo "My first wheel is " . $wheel1->get_width_and_unit() . " wide and is " . $wheel1->get_diameter_and_unit() . " in diameter.";

//$door1 = new Door(xxx,xxx);
//echo "My first door have " . $door1->get_xxxxx() . " and  is " . $door1->get_yyyyy();

//$body1 = new Body(xxx,xxx);
//echo "My first body have " . $body1->get_xxxxx() . " and  is " . $body1->get_yyyyy();

//$engine1 = new Engine(xxx,xxx);
//echo "My first engine have " . $engine1->get_xxxxx() . " and  is " . $engine1->get_yyyyy();


?>

</body>
</html>
