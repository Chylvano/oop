<?php

class Attack extends Pokemon {
    public $attackname;
    public $damage;

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