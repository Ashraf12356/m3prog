<?php
$typeGerecht = 'Hoofdgerecht';
$naamGerecht = 'Pasta Carbonara';
$prijs = 12.50;
$beschrijving = 'Romige pasta met spek en Parmezaanse kaas';
$ingredientenLijst = 'Pasta, spek, eieren, Parmezaanse kaas, room,peper, zout';
$allergenenLijst = 'Gluten, melk, ei';

$menuItem = "Gerecht type: $typeGerecht<br><br>
$naamGerecht €$prijs<br><br>
$beschrijving<br>
Ingrediëntenlijst:<br>
$ingredientenLijst<br><br>
Bent u allergisch? Bekijk dan hieronder de allergeNEnen:<br>
$allergenenLijst<br>";

echo $menuItem;
?>
