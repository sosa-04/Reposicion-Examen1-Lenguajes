<?php

namespace App\Http\Controllers;
use App\Models\Empleado;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    
    public function mostrarEmpleados(){
        $empleados = Empleado::all();

        return view('mostrarEmpleados', compact('empleados'));
    }

    public function crearEmpleado(){
        return view('crearEmpleado');
    }

    public function guardarEmpleado(Request $request){
        $nvoEmpleado = new Empleado();

        $nvoEmpleado->idPrestamo = $request->id;
        $nvoEmpleado->nombre = $request->nombre;
        $nvoEmpleado->apellido = $request->apellido;
        $nvoEmpleado->fechaIngreso = $request->fechaIngreso;
        $nvoEmpleado->salario = $request->salario;
        $nvoEmpleado->save();

        return redirect('/empleados/mostrar');
    }
}
