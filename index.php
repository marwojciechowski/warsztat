<?php
	require_once "Car.php";
	require_once "Customer.php";
	require_once "Mechanic.php";
	require_once "Stand.php";
	require_once "Repairs.php";
	
	$car	= new Car(1,"Audio","S8","Sedan","2005","4.2 V8");
	$customer = new Customer(1,"Adam","Kowalski","783-234-123");
	$mechanic = new Mechanic(1,"Pan","Zdzisiu","123-765-544");
	$stand = new Stand;
	$repair = new Repairs(1,"600zł", "20-10-2015");

?>

