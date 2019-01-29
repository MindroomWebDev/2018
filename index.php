<!DOCTYPE html>
<html>
<head>
	<title>PHP Car Inventory</title>
	<link rel="stylesheet" type="text/css" title="style" href="CSS/<?php echo (!isset($_COOKIE['style'])?'White':$_COOKIE['style']) ?>.css" />
</head>
<body>

	<form action="theme_switch.php" method="post">
  <select name="choice">
  <option value="White" selected>Classic View</option>
  <option value="Gray">Gray View</option>
  <option value="file_name_for_css">Insert Your View Here</option>
  </select>
  <input type="submit" value="Go">
  </form>
	<h1>Welcome to my Car inventory page!</h1>
	<h2>You are invited to add classes, properties and methods to make this web inventory program AWESOME!</h2>
	<p>Before you commit your code always type "git pull" to get the latest changes!</p>
	<p>More info to come...</p>

	<form name="form" action="" method="post">
		<input type="text" name="make" id="make" value="Make">
		<input type="text" name="model" id="model" value="Model">
		<input type="text" name="auto" id="auto" value="Automatic? True/False">
		<input type="text" name="nr_seats" id="nr_seats" value="Number of passengers">
	</form>

	<?php
	include 'car.php';
	include 'wheel.php';
	include 'door.php';

	echo '<h3>Lets list our cars here!</h3>';



//Example of an Array
//$my_first_array = array(2,5,1,7,3,20,10,100);
//var_dump($my_first_array);
//echo'<br><br><br><br><br>';

//Example of instantiating an Object "Car"
// $a_car = new Car("BMW", "M3", 5, True);




//Example of instantiating multiple Objects "Car" inside an inventory list
	$cars = array
  (
  array(new Car("BMW", "M3", 5, True),10,2),
	array(new Car("Holden", "Captiva", 7, True),1,2)
  //"BMW","X7",seats:7, Auto, sold:15,stock:13
  //"Saab","9000",seats:5, Manual, sold:4,stock:7
  //"Land Rover", "Explorer",seats:5, Manual, sold:10,stock:7
  );

	for( $i = 0; $i<sizeof($cars); $i++ ) {
    echo $cars[$i][0]->make."-".$cars[$i][0]->model.": In stock: ".$cars[$i][1].", sold: ".$cars[$i][2].".<br>";
    }


//echo var_dump($cars);
//echo $cars[0][0]->make."-".$cars[0][0]->model.": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
//echo $cars[1][0]->make."-".$cars[1][0]->model.": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";


/*
	$car1 = new Car(5, True);

	$gearType = ($car1->get_is_auto()) ? 'True' : 'False';
	echo "My first car have " . $car1->get_nr_of_pax() . " passenger spots and the status for automatic gear is " . $gearType ;

	echo '<br>';
	$wheel1 = new Wheel(16, 20);
	echo "My first wheel is " . $wheel1->get_width_and_unit() . " wide and is " . $wheel1->get_diameter_and_unit() . " in diameter.";

	$door1 = new Door(50,100);
	echo "My first door has a width of " . $door1->get_width_and_unit() . " and a height of " . $door1->get_height_and_unit();

	//$body1 = new Body(xxx,xxx);
	//echo "My first body have " . $body1->get_xxxxx() . " and  is " . $body1->get_yyyyy();

	//$engine1 = new Engine(xxx,xxx);
	//echo "My first engine have " . $engine1->get_xxxxx() . " and  is " . $engine1->get_yyyyy();
*/

	?>

</body>
</html>
