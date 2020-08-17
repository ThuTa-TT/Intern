<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petre;
use DB;

class PetregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('petreg');
        $users = DB::select('select * from petres');
        return view('petregshow',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *

     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd('lunch time');
        petre::create($request->all());
        return redirect()->route('petregister'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $pet=petre::find($id);
        //dd($pet);
        return view('edit',compact('pet'));
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

        $pet=petre::find($id);
        //dd($pet);
        $pet->oname=request('oname');
        $pet->date=request('date');
        $pet->pname=request('pname');
        $pet->gender=request('gender');
        $pet->age=request('age');
        $pet->type=request('type');
        $pet->color=request('color');
        $pet->phone=request('phone');
        $pet->add=request('add');
        $pet->email=request('email');
        $pet->pwd=request('pwd');
        $pet->save();

        return redirect()->route('petregister');
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
