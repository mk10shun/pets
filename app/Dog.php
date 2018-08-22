<?php

namespace App;

use App\Owner;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $guarded = [];

    //Assume that a Dog can have man users
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }

    public static function searchNameColor($request)
    {
        return Dog::where('name', 'LIKE', "%" . $request->search . "%")
                    ->orwhere('color', 'LIKE', "%" . $request->search . "%");
    }

    public function scopeSearch($q, $search)
    {
        return $q->where('name', 'LIKE', "%" . $search . "%")
                    ->orWhere('color', 'LIKE', "%" . $search . "%");
    }

}
