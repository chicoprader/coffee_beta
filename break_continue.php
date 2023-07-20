<?php

$coffee_store = array(
    "American" => 20,
    "Latte" => 25,
    "Capuccino" => 25.7,
    "Moka"=> 24
);

foreach ($coffee_store as $coffee => $price) {

    echo "coffees $coffee \n";

    if ($coffee == "Latte") {
        echo "This is Latte \n";
        break;
    }


}

echo "\n";