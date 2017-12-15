<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\laravel;

use Illuminate\Support\Facades\Input;

use App\Cars;

class CarController extends Controller
{
    

    public function index()
    {
    	return view("coches");
    }

   /* public function store()
    {
    	$coche = new laravel;
    	$coche->numserie = Input::get("numserie");
    	$coche->subject = Input::get("subject");
    	$coche->motor = Input::get("motor");
    	$coche->modelo = Input::get("modelo");
    	$coche->message = Input::get("message");

    	$coche->save();

    	return ("los datos han sido enviados!");
    } */
    public function save_data(Request $request)
    {     
        $coche = Cars::create($request->all());
        return view('save_data');
        
    }

}
