<?php

namespace UCICApp\Http\Controllers;

use Illuminate\Http\Request;
use UCICApp\Vehiculo;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cars = Vehiculo::all();
        return view('/vehiculos.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'empresa' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'codigo_vehiculo' => 'required',
            'numero_chasis' => 'required',
            'anio' => 'required',
            'codigo_motor' => 'required',
            'precio' => 'required',
            'fotos'=>'required',
        ]);


        $car = new Vehiculo();
        $car->empresa = $request->input('empresa');
        $car->marca= $request->input('marca');
        $car->modelo = $request->input('modelo');
        $car->codigo_vehiculo = $request->input('codigo_vehiculo');
        $car->numero_chasis = $request->input('numero_chasis');
        $car->anio = $request->input('anio');
        $car->codigo_motor = $request->input('codigo_motor');
        $car->precio = $request->input('precio');
        $car->fotos = $request->input('fotos');

        /*if($request->hasfile('fotos')){
            $files = $request->file('fotos')
        }*/

        $car->save(); 

        return redirect(route('vehiculos.index'))->with('guardado','Vehiculo guardado correctamente');
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
