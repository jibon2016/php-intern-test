<?php

use App\Http\Tasks\Encapsulation\EmployeeInformation;
use Illuminate\Support\Facades\Route;



Route::get('/{component?}', function () {
    return view('welcome');
})->where('component', '[\/\w\.-]*');
//
//Route::get('/', function () {
//    return view('welcome');
//});
