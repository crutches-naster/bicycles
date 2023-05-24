<?php

require_once 'custom_autoloader.php';

$brands = ["Sony", "LG"];

foreach ($brands as $brand)
{
    $tvFactory = match ($brand){
        'Sony' => new SonyFactory(),
        "LG" => new LgFactory()
    };

    $concreteLedTV = $tvFactory->createLedTV();
    $concreteLedTV->turnOn();

    $concreteLcdTV = $tvFactory->createLcdTV();
    $concreteLcdTV->turnOn();
}
