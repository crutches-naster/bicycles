<?php

interface ITaxi
{
    public function getModel(): string;
    public function getPrice(): float;
    public function getFullInfo(): string;
}

class StandartTaxi implements ITaxi
{
    private string $model = "Sonata";
    private float $price = 50;

    public function getModel(): string
    {
        return $this->model;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getFullInfo(): string
    {
        return  $this->model . ' : ' . $this->price;
    }
}

class EconomyTaxi implements ITaxi
{
    private string $model = "Logan";
    private float $price = 30;

    public function getModel(): string
    {
        return $this->model;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getFullInfo(): string
    {
        return  $this->model . ' : ' . $this->price;
    }
}

class PremiumTaxi implements ITaxi
{
    private string $model = "Tesla";
    private float $price = 100;

    public function getModel(): string
    {
        return $this->model;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getFullInfo(): string
    {
        return  $this->model . ' : ' . $this->price;
    }
}
