<?php
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Route;

//Fortify::routes();

Fortify::registerView(function () {
    return view('register'); 
});

Fortify::loginView(function () {
    return view('login'); 
});
