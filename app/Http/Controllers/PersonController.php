<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use App\Imports\PersonsImport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->is_admin == 1) {
            $persones = auth()->user()->persons()->get();
        }else{
            $persones = Person::where('user_id',auth()->user()->parent_id)->get();
        }
//            dd($persones);
        $persone=Person::find(1);
//       dd($persone->baskets()->get()->last()->created_at);
       return  view('persons.index')->with('persones',$persones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Person $person)
    {
        $person->name=$request->name;
        $person->phone=$request->phone;
        $person->case=$request->case;
        $person->work=$request->work;
        $person->building=$request->building;
        $person->number_famly=$request->number_famly;
        $person->city=$request->city;
        $person->city=$request->city;
        $person->dor=$request->dor;
        $person->user_id=Auth::user()->id;
        $person->save();
        return  redirect('/persons');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        return view('persons.edit')->with('person',$person);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $person->name=$request->name;
        $person->phone=$request->phone;
        $person->case=$request->case;
        $person->work=$request->work;
        $person->building=$request->building;
        $person->number_famly=$request->number_famly;
        $person->city=$request->city;
        $person->city=$request->city;
        $person->dor=$request->dor;
        $person->save();
        return  redirect('/persons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->baskets()->delete();
        $person->delete();
        return  redirect('/persons');
    }
    public function importView()

    {

        return view('import');

    }

    public function import()

    {

        Excel::import(new PersonsImport,request()->file('file'));



        return back();

    }
}
