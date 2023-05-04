<?php
require "vendor\autoload.php";
require_once "Color.php";

    $color_normal = new Color(100, 100, 100);
    d("Instantiated color: { $color_normal }");

    $color_mixed = $color_normal->mix(new Color(200, 200, 200));
    d("Instance mixed color : {$color_mixed}");

    $color_mixed_static = Color::getMixed($color_normal, $color_mixed);
    d("Static mixed color: { $color_mixed_static }");

    $color_random = Color::getRandom();
    d("Random color: { $color_random }");

    $equal_color = $color_random;
    d("Colors copy equals: " . ( $color_random->equals($equal_color) ? "true" : "false") );

    d("Full random colors are equal: " . ( $color_random->equals(Color::getRandom()) ? "true" : "false" ) );

    $color_failed = new Color(500, -1, -1);
    d("Failed color : { $color_failed }");


