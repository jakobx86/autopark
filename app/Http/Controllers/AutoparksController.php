<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autopark;

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
    public function store(Request $request)
    {
       $autopark= new Autopark;
       $autopark->name=$request->get('autopark-name');
       $autopark->address=$request->get('autopark-address');
       $autopark->scheadule=$request->get('autopark-scheadule');

       $autopark->save();
       return redirect()->route('autoparks.index');
    }
}
