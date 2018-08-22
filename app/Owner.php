<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Owner extends Model
{
    protected $guarded = [];

    public function dogs()
    {
        return $this->hasMany('App\Dog');
    }

    public function cats()
    {
        return $this->hasMany('App\Cat');
    }

    public static function searchNameEmailLocation(Request $request)
    {
        return Owner::search($request->search);
    }


    public function scopeSearch($q, $search)
    {
        return $q->where('name', 'LIKE', "%" . $search . "%")
                    ->orWhere('email', 'LIKE', "%" . $search . "%")
                    ->orWhere('location', 'LIKE', "%" . $search . "%");
    }

    public function scopeAfter($q, $date)
    {
        return $q->where('created_at', '>', $date);
    }

 }
