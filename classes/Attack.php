<?php
//Bouwt attack class op

class Attack extends Pokemon {
    private $attackname;
    private $damage;

        public function __construct($attackname, $damage) {
            $this->attackname    = $attackname;
            $this->damage        = $damage;
        }
        public function getName() {
            return $this->attackname;
        }
    
        public function getDamage() {
            return $this->damage;
        }
}