<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\models\Concert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConcertsController extends Controller
{
    public function index()
    {
        $cat=Category::all();
        $concerts =Concert::all();
        return view('frontend.concert.index',compact('concerts'),compact('cat'))    ;
    }
    public function download()
    {
        $cat=Category::all();
        $concerts =Concert::all();
        return view('frontend.reserve_concert.index',compact('concerts'),compact('cat'))    ;
    }
}
