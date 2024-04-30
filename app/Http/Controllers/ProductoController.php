<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    
    public function mostrarProductos(){
        $productos = Producto::all();

        return view('mostrarProductos', compact('productos'));
    }

    public function crearProducto(){
        return view('crearProducto');
    }

    public function guardarProducto(Request $request){
        $nvoProducto= new Producto();

        $nvoProducto->descripcion = $request->descripcion;
        $nvoProducto->precio = $request->precio;
        $nvoProducto->stock = $request->stock;
        $nvoProducto->pagaIsv = $request->Isv;
        $nvoProducto->save();

        return redirect('/productos/mostrar');
    }
}
