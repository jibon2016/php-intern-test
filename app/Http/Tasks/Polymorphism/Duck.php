<?php

namespace App\Http\Tasks\Polymorphism;

class Duck implements Animal, Food
{

    public function sounds(): string
    {
        return 'Dogs Sounds like "pack pack"';
    }

    public function typeOfFood(): string
    {
        return 'Some kind of duck food';
    }
}
