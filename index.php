<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'Skateboard.php';
require_once 'PedestrianWay.php';
// $bike = new Bicycle('blue',1);
// $bike->setCurrentSpeed(20);


// $bicycle = new Bicycle('blue', 1);

// // Instanciation d'un nouvel objet $rockrider
// $rockrider = new Bicycle('grey',1);



// // Instanciation d'un nouvel objet $tornado
// $tornado = new Bicycle('pink',1);
// $tornado->setCurrentSpeed(5);


// // Instanciation d'un nouvel objet $BMW

// $bmw= new car('blue',4,'essence') ;
// $tesla = new Car('black', 4,'electric');
// $ferrari = new Car('red', 2,'essence');
// $vehicle = new Vehicule('pink', 4,'essence');


// utilisation du frein a main
$car = new Car('green', 4, 'electric');
$car->setCurrentSpeed(12);
//$car->setParkBrake(false);

try {
    $car->start();
} catch(Exception $e){
    // code to manage exceptions
    echo "Exception: ". $e->getMessage() . "n";
} finally {
    echo "Ma voiture roule comme un donut!\n";
}
// Moving car
 // Tente de démarrer la voiture

echo '<br> Vitesse de la voiture: ' . $car->getcurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getcurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

//var_dump(Car::ALLOWED_ENERGIES);
// // echo $car->forward();


// $camion = new Truck("rouge", 2,"essence",100);
// $camion->setChargement(100);


// // chargement camion 
// echo  'the truck is'.' '.$camion->plein().' '.$camion->forward();

// // Moving bike
// echo '<br> Vitesse du camion : ' . $camion->getcurrentSpeed(). ' km/h' . '<br>';
// echo $camion->brake();
// echo '<br> Vitesse du camion : ' . $camion->getcurrentSpeed() . ' km/h' . '<br>';
// echo $camion->brake();

// // Création d'une autoroute
// $highway = new PedestrianWay();

// // Création de plusieurs véhicules
// $car1 = new Car('black',4,'electric');
// $bike1 = new Bicycle('green',1);
// $skateboard1 = new Skateboard('red',1);
// $skateboard2 = new Skateboard('pink',1);

// // Ajout d'une voiture à l'autoroute

// $highway->addVehicule($bike1); 

// echo "Véhicules présents sur la PedestrianWay : " . var_dump(", ", $highway->getCurrentVehicules()). "\n";

// // Affichage des véhicules actuellement sur l'autoroute
// var_dump($highway->getCurrentVehicules()); 








