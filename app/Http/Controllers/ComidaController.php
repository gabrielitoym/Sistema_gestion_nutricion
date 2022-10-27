<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   $comidas['comidas']=Comida::paginate(10);
        return view('comidas.index',$comidas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comidas.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosComida=request()->except('_token');
        Comida::insert($datosComida);
        $comidas['comidas']=Comida::paginate(10);
        return view('comidas.index',$comidas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function show(Comida $comida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comida=Comida::findOrFail($id);
        return view('comidas.edit',compact('comida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {       
        $datosComida=request()->except('_token','_method');
        Comida::where('id','=',$id)->update($datosComida);
        $comida=Comida::findOrFail($id);
        $datos['comidas']=Comida::paginate(10);
        return view('comidas.index',$datos);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comida::destroy($id);
        return redirect('comida');
    }
}
