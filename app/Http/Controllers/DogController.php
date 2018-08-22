<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Dog;
use Event;
use App\Events\DogCreated;

use App\Http\Resources\Dogs as DogsResource;
use App\Http\Resources\Dog as DogResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DogController extends Controller
{
    public function __construct()
    {
        //maybe put validation here?
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $query = Dog::query();
        //start up a query on the Dog model. Store it into query variable

        if(isset($request->search)) {
            $query->where('name', 'LIKE', "%$request->search%");
        }

        if(isset($request->owner_name)) {
            $ownerName = $request->owner_name;
            // store owner_name request variable from the parameter

            $query->whereHas('owner', function($q) use ($ownerName){
                $q->where('name', 'LIKE','%'.$ownerName.'%');
            });
        }

        if(isset($request->color)) {
            $query->where('color', $request->color);
        }

        $results = $query->get();

        return new DogsResource($results);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dog = Dog::create($request->all());
        Event::fire(new DogCreated($dog));
        return response()->json($dog, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function show(Dog $dog)
    {
        // return Dog::find($dog->id);
        // the better way
        return new DogResource($dog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dog $dog)
    {
        $dog->update($request->all());
        return response()->json($dog, 200);
    }

    /**
     * Remove the specifiedsss resource from storage.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dog $dog)
    {
        $dog->delete();
        return response()->json(null, 204);
    }
}
