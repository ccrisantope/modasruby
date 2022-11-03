<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::view('productos', 'productos.productos')->name('productos');
Route::view('productos/create', 'productos.create')->name('productos.create');
Route::view('productos/{id}', 'productos.show')->name('productos.show');
Route::view('clientes', 'clientes.clientes')->name('clientes');
Route::view('clientes/create', 'clientes.create')->name('clientes.create');
Route::view('clientes/{id}', 'clientes.show')->name('clientes.show');
Route::view('ventas', 'ventas.ventas')->name('ventas');
Route::view('ventas/create', 'ventas.create')->name('ventas.create');
Route::view('ventas/{id}', 'ventas.show')->name('ventas.show');
