<?php

class Resistance {
    public $energytype;
    public $value;

        public function __construct($energytype, $value) {
            $this->energytype    = $energytype;
            $this->value         = $value;
        }
        public function getEnergytype() {
            return $this->energytype;
        }
    
        public function getValue() {
            return $this->value;
        }
}