<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";

// Creation d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Pierre-Yves");
echo "<p>L'humain ".$humain->getNom()." a : ".$humain->getVie()." point(s) de vie</p>";


echo "<br>";
// Creation d'une instance de la classe dragon
$dragon = new dragon();

echo "<p>Le dragon ".$dragon->getNom()." a : ".$dragon->getVie()." point(s) de vie</p>";

