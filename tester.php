<?php
header('Content-Type: text/html; charset=utf-8');



include('class/item.class.php');

$item = new Item();
$item->setName("Kraftig rød karrysuppe, med pocherede store rejer, kokos og grønsager");

echo $item->getName();

echo "<br><br><br>";

$item2 = new Item();
$item2->setName("* Kølig og krydret tomatsuppe, landpølse og olivenbagt brød. ");

echo $item2->getName();

