<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehiculoController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $datos['vehiculo']=Vehiculos::paginate(10);
        return view('vehiculo.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $vehiculo = new Vehiculos(); // Creas una instancia vacía de Vehiculos
        return view('vehiculo.createVehiculo', compact('vehiculo'));
    }


    public function edit($id){
        $vehiculo=Vehiculos::findOrFail($id);
        return view('vehiculo.editVehiculo', compact('vehiculo'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $datosVehiculo = request()->except('_token');
        if($request->hasFile('Foto')){
            $datosVehiculo['Foto'] =$request->file('Foto')->store('uploads', 'public');
        }
        Vehiculos::insert($datosVehiculo);

        return response()->json($datosVehiculo);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculos $empleados){
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $datosVehiculo = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $datosVehiculo['Foto'] =$request->file('Foto')->store('uploads', 'public');
        }

        Vehiculos::where('id','=',$id)->update($datosVehiculo);
        $vehiculo=Vehiculos::findOrFail($id);
        return view('vehiculo.editVehiculo', compact('vehiculo'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $idVehiculos){
        Vehiculos::destroy($idVehiculos);
        return redirect('vehiculo');
    }
}
