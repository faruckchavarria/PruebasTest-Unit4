<?php

namespace App\Http\Controllers\API;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditarclienteRequest;
use App\Http\Requests\GuardarclienteRequest;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = cliente::query()->paginate();
        return response($cliente, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarclienteRequest $request)
    {
        cliente::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Proveedor guardado exitosamente'
        ]);   
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        return response()->json([
            'res'=>true,
            'data'=>$cliente
        ]); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarclienteRequest $request,cliente $cliente)
    {
        $cliente->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'proveedor actualizado exitosamente'
        ],200); 

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>'proveedor Eliminado exitosamente'
        ]);
    }
}