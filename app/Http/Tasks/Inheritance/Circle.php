<?php

namespace App\Http\Tasks\Inheritance;

class Circle extends Shape
{

    protected int $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return M_PI * pow($this->radius, 2);
    }
}
