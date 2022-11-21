<?php

//Bouwt pokemon class op
class Pokemon {
    private $name;
    private $energyType;
    private $hitpoints;
    private $weakness;
    private $resistance;
    private $attacks;
    
    public static $population = 0;
 
    public function __construct($energyType, $name, $hitpoints, $weakness, $resistance, $attacks) {
        $this->energyType   = $energyType;
        $this->name         = $name;
        $this->hitpoints    = $hitpoints;
        $this->weakness     = $weakness;
        $this->resistance   = $resistance;
        $this->attacks      = $attacks;
    
        self::$population++;
    }

    public function getName() {
        return $this->name;
    }
    
    public function getEnergytype() {
        return $this->energyType;
    }

    public function getHitpoints() {
        return $this->hitpoints;
    }

    public function getWeakness() {
        return $this->weakness;
    }

    public function getResistance() {
        return $this->resistance;
    }

    public function getAttacks() {
        return $this->attacks;
    }

    public function __toString() {
        return json_encode($this);
    }


    //Returns damage
    public function Attack($attack, $pokemon)
    {
        return $this->damage($attack->getDamage(), $pokemon);
    }


        //Rekent de damage uit
    public function damage($damage, $pokemon){
        foreach($pokemon->getWeakness() as $weakness){
            if($weakness->getEnergytype() == $this->getEnergytype()){
                $damage = $damage * $weakness->getMultiplier();
            }
        }
        foreach($pokemon->getResistance() as $resistance){
            if($this->getEnergytype() == $resistance->getEnergytype()){
                $damage = $damage - $resistance->getValue();
            }
        }
        $this->calculateHealth($damage, $pokemon);
            return $damage;
    }

    //Kijkt of er een pokemon dood is en haalt hem uit de game
    public function calculateHealth($damage, $pokemon){
       if($pokemon->getHitpoints() <= $damage){
            $pokemon->hitpoints = 0;
            self::$population--;
       } else {
        $pokemon->hitpoints = $pokemon->getHitpoints() - $damage;
       }
    }

    public static function getPopulation() {
        return self::$population;
    }

}
