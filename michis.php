<?php

$tienda_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($tienda_de_cafes as $cafe => $price) {
    echo "EL cafe $cafe cuesta $$price USD \n";
};

echo "\n";