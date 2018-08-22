<?php
namespace App\Http\Controllers;

use App\Owner;
use App\Dog;
use App\Cat;

use App\Http\Resources\SearchResource;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        return new SearchResource($request);
    }
}
