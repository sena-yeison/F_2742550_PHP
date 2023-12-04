<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Companie;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /* Metodo patra Listar */
    public function index()
    {
        $employeesData = Employee::join('companies', 'employees.company_id', '=', 'companies.id')
        ->select('*')
        ->get();

        // return response()->json($employeesData);
        return view('employees.list', compact('employeesData'));
    }

    /* Metodo para mostrar el formulario de registro */
    public function create()
    {
        $companies = Companie::all();
        return view('employees.create', compact('companies'));
    }

    /* Obtener los datos del formulario y guardarlos y retornar al listado */
    public function store(Request $request)
    {
        $Employee = new Employee();
        $Employee->nombre =  $request->input('nombres');
        $Employee->apellidos = $request->input('apellidos');
        $Employee->cargo = $request->input('cargos');
        $Employee->company_id = $request->input('compania');
        $Employee->estado = 1;

        // return response()->json($Employee);
        
        $Employee->save();
        return redirect()->route('Employes.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
