<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Categories;
use App\Models\CarModel;
use App\Models\CarMake;


class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return response()->json($cars);
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $carMakes = CarMake::all();
        $carModels = CarModel::all();
        return view('cars.create',['carMakes'=>$carMakes,'carModels'=>$carModels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'make'=>'required',
        //     'model'=>'required',
        //     'year'=>'required|date',
        //     'engine'=> 'required|integer|min:800|max:6500'
        //     ]);
        $carMake = CarMake::find($request->make);
        
        $car = Car::create([
            'make'=>$carMake->name,
            'model'=>$request['model'],
            'year'=>$request['year'],
            'engineSize'=>$request['engineSize'],
            'description'=>$request['description']
        ]);
        return response()->json($car);
    }
    public  function getCarOptions( )
    {
        $carMakes = CarMake::all();
        $carModels = CarModel::all();
        $carOptions = ['makes'=>$carMakes,'models'=>$carModels];
        return response()->json($carOptions);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($car)
    {        
        $cardetails = Car::find($car);
        return response()->json($cardetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($car)
    {   
        $car = Car::find($car);
        
        $carModels = CarModel::all();
        $carMakes = CarMake::all();
        

        return response()->json(['car'=>$car,'carModels'=>$carModels,'carMakes'=>$carMakes]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $car)
    {
        $request->validate([
            $request->make=>'required',
            $request->model=>'required',
            $request->year=>'required',
            $request->engine=> 'required|integer|min:800|max:6500'
            ]);
            $carMake  = Car::find($request->input('make'));
            $car = Car::find($car)->    
        update([
            'make'=> $request->input('make')   ,
            'model'=> $request->input('model'),
            'year'=> $request->input('year'),
            'engineSize'=> $request->input('engine'),
            'description'=> $request->input('description')

        ]);
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Car::find($id)->delete();
        return response('Deleted' ,200);
    }
    public function showAddCategory(){
        $cars = Car::all();
        return view('cars.createCategory',['cars',$cars]);
    }
    public function submitAddCategory(Request $request){
        Categories::create([
            'make'=> $request->input('make'),
            'model'=> $request->input('model')
        ]);
        return redirect('/cars');
    }
}
