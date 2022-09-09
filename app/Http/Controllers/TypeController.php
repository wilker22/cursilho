<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;

class TypeController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $types = Type::all();
            return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeRequest $request)
    {   
        $type = new Type();
        
        $type->create($request->all());
        
        $notification = [
            'message' => 'Tipo cadastrado com sucesso!',
            'type-alert' => 'success'
        ];

        return redirect()->route('types.index')->with($notification);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::find($id);
       // dd($type->id);
        if(!$type){
            return redirect()->back();
        }

        return view('admin.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeRequest  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeRequest $request,$id)
    {
        $type = Type::find($id);
        
        $type->update($request->all());
        
        $notification = [
            'message' => 'Tipo atualizado com sucesso!',
            'type-alert' => 'success'
        ];

        return redirect()->route('types.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::find($id);
    	$type->delete();

    	$notification = array(
    		'message' => 'Tipo removido com sucesso!',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('user.view')->with($notification);

    }
}
