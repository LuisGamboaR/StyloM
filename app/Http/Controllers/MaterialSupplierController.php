<?php

namespace App\Http\Controllers;

use App;
Use App\Supplier;
Use App\Material;
use Illuminate\Http\Request;
use Alert;


class MaterialSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $suppliers= App\Supplier::all();
        $materials= App\Material::all();
        $matesupp = Material_Supplier::orderBy('id', 'DESC')->get();
        $i = 1;
        return view ('materials_suppliers/index', compact('matesupp', 'i'), compact('suppliers'), compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        $materials= Material::all();
        return view ('materials_suppliers/create', compact('suppliers'), compact('materials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materials = new App\Material;

        $materials->material_id = $request->supplier_id;
        $materials->supplier_id= $request->supplier_id;
        $materials->cantidad = $request->cantidad;
        $materials->precio = $request->precio;
        $materials->save();

        Alert::success('Operación realizada con éxito','¡Materia Prima registrada!');

        return redirect()->route('materia-proveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
