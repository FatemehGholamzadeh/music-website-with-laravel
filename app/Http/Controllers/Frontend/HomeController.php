<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Music;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        $musics = Music::all();
return view('frontend.home.index',compact('musics'))    ;
    }
}
