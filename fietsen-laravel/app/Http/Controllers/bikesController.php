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


    public function show (bikes $bike)
        {

        return view('bikes.show', compact('bikes'));

        }
    public function create()
        {

          return view ('bikes.create');
        }


    public function edit(bikes $bike){

        return view('bikes.edit', compact('bikes'));
        }

    public function update(bikes $bike){


        $bike->update(request(['prijs','omschrijving']));

        return redirect('/bikes');
        }


    public function destroy(bikes $bike){
        $bikes ->delete();
        return redirect('/bikes');
        }



    public function store()
        {
    bikes::create(request(['prijs','omschrijving']));


          return redirect('/bikes/index');
         }
}
