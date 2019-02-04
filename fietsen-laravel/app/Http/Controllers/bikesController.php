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
          $bikesArray = bikes::all();


          return view ('create', compact('bikesArray'));
    }
    public function show(){

    }
    public function edit(){
        return view('bikes.edit');
    }
    public function destroy(){

    }
    public function store()
    {
          $bikesArray = bikes::all();
      $bikesArray->title = request('title)');
      $bikesArray->omschrijving = request('omschrijving');
          $bikesArray->save();
          return redirect('/bikes');
    }




}
