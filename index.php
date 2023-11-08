<?php
//require_once('Car.php');
//require_once('Cat.php');
require_once('Dog.php');


//$myCar = new Car("BMW",1900);


//echo $myCar->brand . "<br>";

//$myCar->makeNoise();
//Car::makeNoise();
//echo "PHP";


//$mincis = new Cat();
//$mincis->name = "Mincis";


//$brincis = new Cat();
//$brincis->name = "Brincis";

//Cat::meow();

$myDog = new Dog("Reksis", 6);
$myDog->birthday();

echo "Reksa vecums pēc 1 gada: " . $myDog->getAge() . " gadi<br>";

Dog::woof();