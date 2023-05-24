<?php

class LgFactory implements IFactory
{

    public function createLedTV() : LgLedTv
    {
        return new LgLedTv();
    }

    public function createLcdTV() : LgLcdTv
    {
        return new LgLcdTv();
    }
}
