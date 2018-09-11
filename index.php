<link rel="stylesheet" type="text/css" href="pokemon.css">
<img id="pikachu" src="img/pikachu.gif" alt="pokemon1">
<img id="charmeleon" src="img/charmeleon.gif" alt="pokemon2">
<?php
include('pokemon.php');
include('attack.php');
//Name,$EnergyType,$Hitpoints,$Health,$Attacks,$Weakness,$Resisitence

$pikachu = new pokemon("pikachu","ligtning",60,60,["Electric ring", 50], ["Pika Punch", 20], "fire", ["fighting", 20]);
$Charmelion = new pokemon("charmeleon","fire",60,60,["Head Butt", 10], ["flare", 30], "water", ["lightning", 10]);


