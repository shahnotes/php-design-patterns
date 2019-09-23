<?php

$papad_types = [
    'MirchMasalaPapad'    => 500,
    'PlainPapad'          => 10000,
    'NSSBlackPepperPapad' => 50
];

$papads = PapadFactory::massMakePapad($papad_types,1000);

print_r($papads);