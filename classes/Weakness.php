<?php
//Bouwt weakness class op

class Weakness {
    private $energyType;
    private $multiplier;

        public function __construct($energyType, $multiplier) {
            $this->energyType    = $energyType;
            $this->multiplier    = $multiplier;
        }
       
        public function getEnergytype() {
            return $this->energyType;
        }
    
        public function getMultiplier() {
            return $this->multiplier;
        }
}