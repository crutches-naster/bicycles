<?php

require_once ('Taxi.php');

abstract class TaxiFactory
{
    abstract public function createTaxi(): ITaxi;

    public function bookTaxi()
    {
        $taxi = $this->createTaxi();
        echo "Taxi info " . $taxi->getFullInfo() . "\n";
    }
}

class EconomyTaxiFactory extends TaxiFactory
{
    public function createTaxi(): ITaxi
    {
        return new EconomyTaxi();
    }
}

class StandardTaxiFactory extends TaxiFactory
{
    public function createTaxi(): ITaxi
    {
        return new StandartTaxi();
    }
}

class PremiumTaxiFactory extends TaxiFactory
{
    public function createTaxi(): ITaxi
    {
        return new PremiumTaxi();
    }
}
