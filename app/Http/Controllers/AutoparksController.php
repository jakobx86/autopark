<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autopark;
use App\Car;
use App\Http\Requests\Autoparks\StoreAutopark;

class AutoparksController extends Controller
{
    //
    public function index()
    {
        return view('autoparks.index');
    }
    public function create()
    {
        return view('autoparks.create');
    }
    public function store(StoreAutopark $request)
    {
        $validated = $request->validated();
        var_dump($validated);
       $autopark= new Autopark;
       $autopark->name=$request->get('autopark-name');
       $autopark->address=$request->get('autopark-address');
       $autopark->scheadule=$request->get('autopark-scheadule');

       $drivers_name=$request->post('carnumber');
       $cars_number=$request->post('drivername');
       //dd($drivers_name);

       for ($i=0; $i < count($drivers_name); $i++) {

            $car= new Car;
            $car->driver_name= $drivers_name[$i];
            $car->number= $cars_number[$i];
            $car->save();

       }




       //$autopark->save();
       return redirect()->route('autoparks.create');
    }
}
