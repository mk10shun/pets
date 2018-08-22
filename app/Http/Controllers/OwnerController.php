<?php

// homestars contractor (that call went really well)
// galvanized aluminimum
// 50 x 40 = 2000 x 2 = $4,000
//
// nuvoiron.ca
// danrick.ca

// 1. Add Cats
// 2. Add owner with Cat or Dog
// 3. Add a searchController - to return any results from all three tables (Cats, owner, dogs)
// every table has a search set and it normalizes all of your searchable traits into one field

namespace App\Http\Controllers;

use App\Owner;
use App\Dog;
use App\Cat;

use App\Http\Resources\Owner as OwnerResource;
use App\Http\Resources\Owners as OwnersResource;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class OwnerController extends Controller
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
        $query = Owner::query();

        // return new OwnersResource($query->where('id','>','0')->pluck('name', 'location'));

        if(isset($request->owner_name)){
            $query->where('name', $request->owner_name);
        }

        if(isset($request->owns_number_of_dogs)){
            $query->has('dogs', '=', $request->owns_number_of_dogs);
        }

        if(isset($request->location)){
            $query->where('location', $request->location);
        }

        $result = $query->get();

        return new OwnersResource($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = [];

        $owner = new Owner($request->only(['name', 'email', 'location']));
        $owner->save();

        $result['owner'] = $owner;

        if(isset($request->cat)) {
            $cat = new Cat($request->cat);
            $owner->cats()->save($cat);
            $result['cat'] = $cat;
        }

        if(isset($request->dog)) {
            $dog = new Dog($request->dog);
            $owner->dogs()->save($dog);
            $result['dog'] = $dog;
        }

        return new OwnerResource($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        return new OwnerResource($owner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        $owner->update($request->all());
        return $owner;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();
        return response()->json(null, 204);
    }
}
