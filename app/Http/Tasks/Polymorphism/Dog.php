<?php

namespace App\Http\Tasks\Polymorphism;

class Dog implements Animal, Food
{

    public function sounds(): string
    {
        return 'Dogs Sounds like "Gaw Gaw"';
    }

    public function typeOfFood(): string
    {
        return "Some kind of Dog food";
    }
}
