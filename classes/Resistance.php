<?php
//Bouwt resistance class op
class Resistance {
    private $energyType;
    private $value;

        public function __construct($energyType, $value) {
            $this->energyType    = $energyType;
            $this->value         = $value;
        }
        
        public function getEnergytype() {
            return $this->energyType;
        }
    
        public function getValue() {
            return $this->value;
        }
}