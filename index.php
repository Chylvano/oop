<?php

require_once 'init.php';

$pikachu       = new Pikachu();
$charmeleon    = new Charmeleon();


print $pikachu->getName() . " HP: " . $pikachu->getHealth();
print '<br>';
print $charmeleon->getName() . " HP: " . $charmeleon->getHealth();
print '<br>';
print '<br>';

$pikachu->DoAttack($charmeleon);
print '<br>';
print '<br>';

$charmeleon->DoAttack($pikachu);
print '<br>';
print '<br>';

$pikachu->DoAttack($charmeleon);

?>