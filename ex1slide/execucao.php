<?php

require_once("modelos/Animal.php");
require_once("modelos/Gato.php");
require_once("modelos/Cachorro.php");

$gato1 = new Gato("Gatinha", "Siamês");
$gato1->miar();

$gato2 = new Gato("Gatinho", "Laranja");
$gato2->miar();

$cachorro1 = new Cachorro("Cadela", "Pinscher");
$cachorro1->latir();

$cachorro2 = new Cachorro("Cachorro", "Salsicha");
$cachorro2->latir();
