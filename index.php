 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>second OOP site</title>
  </head>
  <body>
  	<h1>Gestion des véhicules</h1>
	<?php
	require_once "Bicycle.php";
	require_once "Car.php";
	require_once "Truck.php";
	$bike = new Bicycle("bleu",1,2);
	echo "valeur de bike: <br>";
	var_dump($bike);
	echo "<br><hr>";

	echo "on passe la vitesse à 10 km/h<br>";
	$bike->forward(10);
	echo "la vitesse actuelle est de: " . $bike->getCurrentSpeed() . "<br>";
	echo "<hr>";
	echo "à présent on freine <br>";
	$bike->brake(3);
	echo "la vitesse actuelle est de: " . $bike->getCurrentSpeed() . "<br>";
	echo "<hr>";
	echo "à présent on freine fort, genre vitesse -30 <br>";
	$bike->brake(30);
	echo "la vitesse actuelle est de: " . $bike->getCurrentSpeed() . "<br>";
	echo "<hr>";

	echo "aller, maintenant, on fait la même chose avec la voiture<br>";
	$tutut = new Car("blanche",4,4,"essence");
	echo "valeur de tutut: <br>";
	var_dump($tutut);
	echo "<br><hr>";

	echo "on passe la vitesse à 50 km/h<br>";
	$tutut->forward(50);
	echo "la vitesse actuelle est de: " . $tutut->getCurrentSpeed() . "<br>";
	echo "<hr>";
	echo "à présent on freine <br>";
	$tutut->brake(20);
	echo "la vitesse actuelle est de: " . $tutut->getCurrentSpeed() . "<br>";
	echo "<hr>";
	echo "à présent on freine fort, genre vitesse -200<br>";
	$tutut->brake(200);
	echo "la vitesse actuelle est de: " . $tutut->getCurrentSpeed() . "<br>";
	echo "<hr>";

	echo "aller, maintenant, on fait la même chose avec le camion<br>";
	$broum = new Truck("blanc",2,6,"gazoil",32000);
	echo "valeur de Broum: <br>";
	var_dump($broum);
	echo "<br><hr>";

	echo "on passe la vitesse à 50 km/h<br>";
	$broum->forward(50);
	echo "la vitesse actuelle est de: " . $broum->getCurrentSpeed() . "<br>";
	echo "<hr>";
	echo "à présent on freine <br>";
	$broum->brake(20);
	echo "la vitesse actuelle est de: " . $broum->getCurrentSpeed() . "<br>";
	echo "<hr>";
	echo "à présent on freine fort, genre vitesse -200<br>";
	$broum->brake(200);
	echo "la vitesse actuelle est de: " . $broum->getCurrentSpeed() . "<br>";
	echo "<hr>";
	
	echo "à présent, on charge le camion<br>";
	$operation = $broum->addLoading(10000);
	if ("ok" == $operation) {
		echo "tout s'est bien passé, la charge actuelle est de :" . $broum->getLoading() . " Kg <br>";
	} else echo "oups, il y a eu de l'abus, chargement annulé<br>";
	echo "bon, on charge un peu trop à présent<br>";
	$operation = $broum->addLoading(40000);
	if ("ok" == $operation) {
		echo "tout s'est bien passé, la charge actuelle est de :" . $broum->getLoading() . " Kg <br>";
	} else echo "oups, il y a eu de l'abus, chargement annulé<br>";
	echo "la charge actuelle est de :" . $broum->getLoading() . " Kg<br>";
	
	echo "bon, on decharge maintenant, allez -6000 Kg<br>";
	$broum->lessLoading(6000);
	echo "la charge actuelle est de :" . $broum->getLoading() . " Kg<br>";
	echo "bon, on decharge trop maintenant, allez -60 000 Kg<br>";
	$broum->lessLoading(60000);
	echo "la charge actuelle est de :" . $broum->getLoading() . " Kg<br>";

	echo "et pour répondre à la grande question, demandons au programme de nous donner l'état de chargement<br>";
	echo "l'état du chargement est: " . $broum->loadingStatus() . "<br>";
	
	echo "<hr>";
	echo "j'éspère que ça vous a plu<br>";	
	?>
  </body>
</html>

