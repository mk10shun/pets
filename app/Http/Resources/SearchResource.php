<?php

namespace App\Http\Resources;

use App\Owner;
use App\Dog;
use App\Cat;

use Illuminate\Http\Resources\Json\JsonResource;

class SearchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $ownerQuery = Owner::query();
        $ownerQuery->search($request->search);
        $owners = $ownerQuery->get();

        $dogQuery = Dog::query();
        $dogQuery->search($request->search);
        $dogs = $dogQuery->get();

        $catQuery = Cat::query();
        $catQuery->search($request->search);
        $cats = $ownerQuery->get();

        $results = $owners->merge($dogs)->merge($cats);
        return $results;
    }
}
