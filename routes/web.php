<?php

use Illuminate\Support\Facades\Route;

Route::get('/hola', function () {
    return '¡Mi primera ruta en Laravel!';
});

Route::get('/Inicio', function () {
    return '¡Ronald Salvatierra Flores!';
});
