<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');


//Productos
Route::get('/productos/mostrar', [ProductoController::class, 'mostrarProductos'])->name('productos.mostrar');
Route::get('/productos/crear', [ProductoController::class, 'crearProducto'])->name('productos.crear');
Route::post('/productos/guardar', [ProductoController::class, 'guardarProducto'])->name('productos.guardar');

//Empleados
Route::get('/empleados/mostrar', [EmpleadoController::class, 'mostrarEmpleados'])->name('empleados.mostrar');
Route::get('/empleados/crear', [EmpleadoController::class, 'crearEmpleado'])->name('empleados.crear');
Route::post('/empleados/guardar', [EmpleadoController::class, 'guardarEmpleado'])->name('empleados.guardar');

//Proveedores
Route::get('/proveedores/mostrar', [ProveedorController::class, 'mostrarProveedores'])->name('proveedores.mostrar');
Route::get('/proveedores/crear', [ProveedorController::class, 'crearProveedor'])->name('proveedores.crear');