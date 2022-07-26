<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequest;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $_cars = Car::latest()->get();
        $cars = [];
        foreach($_cars as $index => $car)
        {
            $cars[$index] = new class($car){
                public function __construct($car)
                {
                    $this->id = $car->id;
                    $this->name = $car->name;
                    $this->founded = $car->founded;
                    $this->hq = $car->hq;
                    $this->createdAt = Carbon::parse($car->created_at)->diffForHumans();
                }               
            };
         };
      
        return view("cars.index")->with("cars",$cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view("cars.create")->with("request",$request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateRequest $request)
    {
        //
        $request->validated;
        Car::create($request->all());
        return redirect("/cars");    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //

    
            $_car = (Object)[
                "id"=>$car->id,
                "name"=>$car->name,
                "founded"=>$car->founded,
                "hq"=>$car->hq,
                "createdAt"=>Carbon::parse($car->created_at)->diffForHumans()
            ];
    

        
        return view("cars.show")->with("car",$_car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
        return view("cars.edit")->with("car",$car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
        $request->validate([
            "name"=>["required"],
            "founded"=>"regex:/^[0-9]{4}/",
            "hq"=>"required"
        ]);

        $car->update($request->all());
        return redirect("/cars");        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
        $car->delete();
        return redirect("/cars");
    }
}
