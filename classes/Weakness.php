<?php

class Weakness {
    public $energytype;
    public $multiplier;

        public function __construct($energytype, $multiplier) {
            $this->energytype    = $energytype;
            $this->multiplier    = $multiplier;
        }
       
        public function getEnergytype() {
            return $this->energytype;
        }
    
        public function getMultiplier() {
            return $this->multiplier;
        }
}