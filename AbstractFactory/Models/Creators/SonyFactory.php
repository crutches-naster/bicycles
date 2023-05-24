<?php

class SonyFactory implements IFactory
{

    public function createLedTV() : SonyLedTv
    {
        return new SonyLedTv();
    }

    public function createLcdTV() : SonyLcdTv
    {
        return new SonyLcdTv();
    }
}
