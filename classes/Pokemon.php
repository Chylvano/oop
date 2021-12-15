<?php

class Pokemon {
    private $name;
    private $energytype;
    private $hitpoints;
    private $health;
 
    public function __construct($name, $energytype, $hitpoints, $health) {
        $this->name         = $name;
        $this->energytype   = $energytype;
        $this->hitpoints    = $hitpoints;
        $this->health       = $health;
    }

    public function getName() {
        return $this -> name;
    }

    public function getHealth() {
        return $this -> health;
    }

    public function getEnergyType() {
        return $this -> energytype;
    }

    public function getHitpoints() {
        return $this -> hitpoints;
    }

    public function getAttack() {
        return $this -> attack;
    }

    function DoAttack($target)
    {
        print $this->name . ' Will attack ' . $target->getName() . ' Using ' . $this->attack[0]->getName();
        print '<br>';
        if ($this->energytype == $target->Weakness->energytype) {
            $target->health = $target->health - ($this->attack[0]->damage * $target->Weakness->multiplier);
        } else {
            $target->health = $target->health - $this->attack[0]->damage;
        }

        if ($target->health < 1) {
            print $target->name . " Has Died ";
        } else {
            print $target->name . " Now Has " . $target->health . " HP Left";
        }
    }
    
}