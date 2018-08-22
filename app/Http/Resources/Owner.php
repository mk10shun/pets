<?php

namespace App\Http\Resources;

use App\Http\Resources\Dog as DogResource;
use App\Http\Resources\Cat as CatResource;

use Illuminate\Http\Resources\Json\JsonResource;

class Owner extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $owner = $this['owner'];
        $dog = new DogResource($this['dog']);
        $cat = new CatResource($this['cat']);

        return [
            'id'            => $owner->id,
            'name'          => $owner->name,
            'email'         => $owner->email,
            'location'      => $owner->location,
            'dogs_owned'    => $dog,
            'cats_owned'    => $cat
        ];
    }
}
