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

echo '<h3>Lets list our cars here!</h3>';
$car1 = new Car(5, True);
echo "My first car have " . $car1->get_nr_of_pax() . " spots and the status for Auto is " . boolval($car1->get_is_auto());
?>

</body>
</html>
