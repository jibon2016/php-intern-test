<?php

namespace App\Http\Tasks\Interface;

interface Logger
{
    public function createLog($type, $message);
}
