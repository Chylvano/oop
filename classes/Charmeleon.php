<?php

class Charmeleon extends Pokemon{

  public function __construct()
  {
    parent::__construct("Charmeleon", "Fire", 60, 60);

    $this->attack[] = new Attack("Flare", 30);
    $this->attack[] = new Attack("Headbutt", 10);
    $this->Weakness = new Weakness("Water", 2);
    $this->Resistance = new Resistance("Lighting", 10);

  }

}