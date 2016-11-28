<?php

try {
	$db = new PDO("mysql:host=localhost;dbname=shirts4mike;","root","root");
	var_dump($db);
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}

echo "Woo-hoo!";
