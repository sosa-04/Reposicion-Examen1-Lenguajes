<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    
    public function mostrarProveedores(){
        $proveedores = Proveedor::all();

        return view('mostrarProveedores', compact('proveedores'));
    }

    public function crearProveedor(){
        return view('crearProveedor');
    }

    public function guardarProveedor(Request $request){
        $nvoProveedor= new Proveedor();

        $nvoProveedor->Idproveedor = $request->id;
        $nvoProveedor->nombre = $request->nombre;
        $nvoProveedor->fechaRegistro = $request->fechaRegistro;
        $nvoProveedor->telefono = $request->telefono;
        $nvoProveedor->correo = $request->correo;
    }
}
