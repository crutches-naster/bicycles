<?php

class Color
{
    public const MIN_COLOR_VALUE = 0;
    public const MAX_COLOR_VALUE = 255;

    protected int  $red, $green, $blue;

    public function __construct( int $red, int $green, int $blue )
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed(): int
    {
        return $this->red;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    private function setRed(int $red): void
    {
        //ToDo refactor to Throwable without die
        if ($this->validateColor($red)) {
            $this->red = $red;
        } else {
            die($this->getColorValueError("Red"));
        }
    }

    private function setGreen(int $green): void
    {
        //ToDo refactor to Throwable without die
        if ($this->validateColor($green)) {
            $this->green = $green;
        } else {
            die($this->getColorValueError("Green"));
        }
    }

    private function setBlue(int $blue): void
    {
        //ToDo refactor to Throwable without die
        if ($this->validateColor($blue)) {
            $this->blue = $blue;
        } else {

            die($this->getColorValueError("Blue"));
        }
    }

    public function equals(Color $foo): bool
    {
        return $this->getRed() === $foo->getRed()
            && $this->getGreen() === $foo->getGreen()
            && $this->getBlue() === $foo->getBlue();
    }

    public function mix(Color $color): Color
    {
        $new_red = $this->mixColor($this->getRed(), $color->getRed());
        $new_green = $this->mixColor($this->getGreen(), $color->getGreen());
        $new_blue = $this->mixColor($this->getBlue(), $color->getBlue());

        return new Color(
            red: $new_red,
            green: $new_green,
            blue: $new_blue
        );
    }

    public function __toString(): string
    {
        return "Red: " . $this->getRed() . " Green: " . $this->getGreen() . " Blue: " . $this->getBlue();
    }

    private function mixColor($color_1, $color_2): int
    {
        return ($color_1 + $color_2) / 2;
    }

    private function validateColor($color): bool
    {
        return in_array($color, range(self::MIN_COLOR_VALUE, self::MAX_COLOR_VALUE), true);
    }


    private function getColorValueError(string $color_name): string
    {
        return "!!Error!! $color_name color value should be between " . self::MIN_COLOR_VALUE . " and " . self::MAX_COLOR_VALUE  ;
    }

    public static function getRandom(): Color
    {
        return new Color(
            red: rand(self::MIN_COLOR_VALUE, self::MAX_COLOR_VALUE),
            green: rand(self::MIN_COLOR_VALUE, self::MAX_COLOR_VALUE),
            blue: rand(self::MIN_COLOR_VALUE, self::MAX_COLOR_VALUE)
        );
    }

    public static function getMixed(Color $foo, Color $bar): Color
    {
        return $foo->mix($bar);
    }

}
