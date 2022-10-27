<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;

class AlimentoController extends Controller
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
    {
        $datos['alimentos']=Alimento::paginate(10);
        return view('alimentos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosAlimeto=request()->except('_token');
        Alimento::insert($datosAlimeto);
        
        $datos['alimentos']=Alimento::paginate();
        return view('alimentos.index',$datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function show(Alimento $alimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alimento=Alimento::findOrFail($id);
        return view('alimentos.edit',compact('alimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosAlimento=request()->except('_token','_method');
        Alimento::where('id','=',$id)->update($datosAlimento);
        $alimento=Alimento::findOrFail($id);
        
        $datos['alimentos']=Alimento::paginate();
        return view('alimentos.index',$datos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alimento::destroy($id);
        return redirect('alimento');
    }
}
