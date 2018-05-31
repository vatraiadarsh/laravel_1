<?php

namespace App\Http\Controllers;

use App\FunctionType;
use Illuminate\Http\Request;

class FunctionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('functiontype.index',[
            'types'=>FunctionType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('functiontype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $type=new FunctionType();
       $type->name=$request->input('name');
       $type->save();
       return redirect('functiontypes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FunctionType  $functionType
     * @return \Illuminate\Http\Response
     */
    public function show(FunctionType $functionType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FunctionType  $functionType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type=FunctionType::find($id);
        if(is_null($type)){
            return redirect("functiontypes");
        }
       return view('functiontype.edit',[
            'type'=>$type
       ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FunctionType  $functionType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FunctionType $functionType)
    {   
        $type=FunctionType::find($request->input('id'));
        $type->name=$request->input('name');
        $type->save();
        return redirect('functiontypes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FunctionType  $functionType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $type=FunctionType::find($id);
        $type->delete();
        return redirect('functiontypes');

    

    }
}
