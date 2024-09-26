<?php

namespace App\Http\Controllers;

use App\Models\Cuidad;
use Illuminate\Http\Request;

class CuidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['ciudades'] = Cuidad ::paginate(5);
        return view('cuidad.index') ->with($data); 
    }

    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ciudad = new Cuidad();
        $ciudad->nombre = $request->city;
        $ciudad->save();
        return redirect('/ciudad');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cuidad $cuidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cuidad $cuidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cuidad $cuidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuidad $cuidad)
    {
        //
    }
}
