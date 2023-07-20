<?php

$coffee_store = array(
    "American" => 20,
    "Latte" => 25,
    "Capuccino" => 25.7,
    "Moka"=> 24
);

foreach ($coffee_store as $key => $value) {
    echo "The price this $key is $$value USD \n";

}

echo "\n";