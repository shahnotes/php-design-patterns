<?php

// Controller 1
$conf = Singleton::getInstance();
echo $conf->getValue("anything");
// Controller 2
$conf1 = Singleton::getInstance();
echo $conf1->getValue("anything");
// Controller 3
$conf2 = Singleton::getInstance();
echo $conf2->getValue("anything");
// X1 Manager
$conf3 = Singleton::getInstance();
echo $conf3->getValue("anything");
// X2 Manager
$conf4 = Singleton::getInstance();
echo $conf4->getValue("anything");