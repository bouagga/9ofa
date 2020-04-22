<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Person;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Basket $basket)
    {
//        dd($request->all());
        $basket->user_id=Auth::user()->id;
        $basket->person_id=$request->person_id;
        $user=User::find(Auth::user()->id);
        $persone=Person::find($request->person_id);
        $basket->user()->associate($user);
        $basket->person()->associate($persone);
        $basket->save();
        return  redirect('/persons');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket ,Request $request)
    {
//        dd($request->all());
        $p=Person::find($request->key);
        $basket->user()->dissociate();
        $basket->person()->dissociate();
        $basket->delete();
        if ($request->key=1){
            return view('persons.edit')->with('person',$p);
        }else
        return  redirect('/persons');

    }
}
