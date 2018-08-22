<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }

    public static function searchNameColor($request)
    {
        return Cat::where('name', 'LIKE', "%" . $request->search . "%")
                    ->orwhere('color', 'LIKE', "%" . $request->search . "%");
    }

    public static function getByNameColorOwnerid($request)
    {
        $query = Cat::query();

        if(isset($request->name)) {
            $query = $query->where('name', 'LIKE', "%" . $request->name . "%");
        }

        if(isset($request->color)) {
            $query = $query->where('color', $request->color);
        }

        if(isset($request->owner_id)) {
            $query = $query->where('owner_id', $request->owner_id);
        }

        $results = $query->get();

        return $results;
    }

    public function scopeSearch($q, $search){
        return $q->where('name', 'LIKE', "%" . $search . "%")
                    ->orWhere('color', 'LIKE', "%" . $search . "%");
    }
}
