<?php
require_once 'init.php';

//Pokemons opbouwen
$pikachu       = new Pikachu();
$charmeleon    = new Charmeleon();

echo $pikachu->getName() . " start met " . $pikachu->getHitpoints() . " hp" . "<br>";
echo $charmeleon->getName() . " start met " . $charmeleon->getHitpoints() . " hp" . "<br>";
echo "Population = " . pokemon::getPopulation() . "<br>" . "<hr>";

//Loopt door het gevecht heen
for($i=0; $i < pokemon::getPopulation(); $i++){
    $damage = $pikachu->attack($pikachu->getAttacks()[$i], $charmeleon, $pikachu);
    echo "<br>" . $pikachu->getName() . " valt " . $charmeleon->getName() . " aan met de " . $pikachu->getAttacks()[$i]->getName() . "<br>";
    echo "it dealt " . $damage . " damage" . "<br>";
    echo $charmeleon->getName() . " heeft nog " . $charmeleon->getHitpoints() . "hp " . "<br>";
    echo "Population = " . pokemon::getPopulation() . "<br>";

    $damage = $charmeleon->attack($charmeleon->getAttacks()[$i], $pikachu, $charmeleon);
    echo "<br>" . $charmeleon->getName() . " valt " . $pikachu->getName() . " aan met de " . $charmeleon->getAttacks()[$i]->getName() . "<br>";
    echo "it dealt " . $damage . " damage" . "<br>";
    echo $pikachu->getName() . " heeft nog " . $pikachu->getHitpoints() . "hp " . "<br>";
    echo "Population = " . pokemon::getPopulation() . "<br>";
}

?>