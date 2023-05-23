<?php

require_once ('Models\TaxiFactory.php');

$types = [ "economy", "premium", "standart", "cargo"];

foreach ($types as $type) {

    $factory = match ($type) {
        "economy" => new EconomyTaxiFactory(),
        "premium" => new PremiumTaxiFactory(),
        "standart" => new StandardTaxiFactory(),
        default => null
    };

    if ($factory) {
        $factory->bookTaxi();
    } else {
        echo "Invalid  taxi type!";
    }
}

