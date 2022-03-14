<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modulo;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if($request->has('modulo_name')){
            if($request->has('orden')){
                try{
                    Modulo::where('orden',$request['orden'])->firstOrFail();
                    return redirect()->back()->withFail('El orden elegido ya existe.');
                }catch(ModelNotFoundException $e){
                    Modulo::create(['modulo'=>$request['modulo_name'],'estado'=>$request['estado'],'orden'=> $request['orden']]);
                   }
            }else{
                Modulo::create(['modulo'=>$request['modulo_name'],'estado'=>$request['estado']]);
            }

        }

        return redirect()->back()->withSuccess('Creado correctamente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
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
    public function edit(Request $request)
    {

        if($request['modulo_name']!=null && $request['modulo_id']!=null){
            Modulo::where('id',$request['modulo_id'])->update(['modulo'=> $request['modulo_name']]);

        }

        return redirect('admin/admodulo');
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
