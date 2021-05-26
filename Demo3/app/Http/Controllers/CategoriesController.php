<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarMake;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categories::all();
        return $categories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMake()
    {
        $carModels = CarMake::all();
        return view('cars.createCategory')->with('carModels',$carModels);
    }
    public function addModelPost(Request $request)
    {
        CarModel::create([
            'model'=> $request->model,
            'make_id'=>$request->make_id
        ]);
        return response('Success',200);
    }
    

    public function addMakePost(Request $request){
        
        CarMake::create([
            'name'=>$request->name
        ]);
        return response('Created',200);
    }
    public function removeMake($id){
        CarMake::find($id)->delete();
        return response('Deleted',204);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        CarModel::create([
            'model'=> $request->input('model'),
            'make_id'=>1
        ]);
        return redirect('/cars');
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
