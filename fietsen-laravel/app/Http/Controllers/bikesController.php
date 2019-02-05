<?php

namespace App\Http\Controllers;
use App\bikes;

use Illuminate\Http\Request;

class bikesController extends Controller
{
    public function index()
    {
          $bikesArray = bikes::all();

          return view ('bikes/index',compact('bikesArray'));
    }


    public function create()
    {



          return view ('bikes.create');
    }
    public function show($id){
        $bikes = bikes::find($id);
        return view('bikes.show', compact('bikes'));
    }
    public function edit($id){
        $bikes = bikes::find($id);
        return view('bikes.edit', compact('bikes'));
    }
    public function destroy(){

    }
    public function store()
    {
        //bikes::create(request(['prijs','omschrijving']));
        $bike = new bikes();
      $bike->prijs = request('prijs');
      $bike->omschrijving = request('omschrijving');
          $bike->save();
          return redirect('/bikes/index');
    }




}
