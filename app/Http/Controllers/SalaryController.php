<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;

class SalaryController extends Controller
{
    // Método para mostrar todos los salarios
    public function index()
    {
        $salaries = Salary::all();
        return view('salaries.index', ['salaries' => $salaries]);
    }

    // Método para mostrar el formulario de creación de salario
    public function create()
    {
        return view('salaries.create');
    }

    // Método para almacenar un nuevo salario
    public function store(Request $request)
    {
        $request->validate([
            'salarios' => 'required|string', // Validar que el campo 'salarios' es requerido y es una cadena
        ]);

        // Crear un nuevo salario en la base de datos
        Salary::create([
            'salarios' => $request->salarios,
        ]);

        return redirect()->route('salaries.index');
    }

    // Otros métodos como show(), edit(), update(), destroy() si es necesario
}
