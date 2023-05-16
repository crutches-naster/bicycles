<?php

interface IEatable
{
    public function eat();
}

interface IFlyable
{
    public function fly();
}


class Swallow implements IEatable, IFlyable
{
    public function eat() {}
    public function fly() {}
}

class Ostrich implements IEatable
{
    public function eat() { }
}

/* Before refactoring

interface Bird
{
    public function eat();
    public function fly();
}

class Swallow implements Bird
{
    public function eat() { ... }
    public function fly() { ... }
}

class Ostrich implements Bird
{
    public function eat() { ... }
    public function fly() {  exception  }
}

*/
