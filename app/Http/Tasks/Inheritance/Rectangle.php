<?php

namespace App\Http\Tasks\Inheritance;

class Rectangle extends Shape
{
    protected int $length ;
    protected int $width ;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function area()
    {
        return $this->length * $this->width;
    }
}
