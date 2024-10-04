<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bienes;
class BienesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bienes = Bienes::all();
        
        return view('admin.bienes.index', compact('bienes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bienes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'id' =>'required|unique:bienes',
            'item' => 'required|unique:bienes'
        ]);  

        $biene = Bienes::create($request->all());

        return redirect()->route('admin.bienes.edit', $biene)->with('info', 'El bien se Actualizo con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bienes $biene)
    {
        return view('admin.bienes.show', compact('biene'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bienes $biene)
    {   
        return view('admin.bienes.edit', compact('biene'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Bienes $biene)
    {
        $request->validate([

            //'id'=>"required|unique:bienes,id,$biene->id",
            //'item' => "required|unique:bienes,item,$biene->id"
        ]);

        $biene->update($request->all());

        return redirect()->route('admin.bienes.edit', $biene)->with('info', 'El bien se Actualizo con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bienes $biene)
    {
        $biene->delete();

        return redirect()->route('admin.bienes.index')->with('info', 'El bien se Elimino con Exito');
    }
}
