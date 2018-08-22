<?php

namespace App\Http\Resources;

use App\Http\Resources\Dogs as DogsResource;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Owners extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection
        ];
    }
}
