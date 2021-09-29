<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Album;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumsController extends Controller
{
    public function index()
    {
        $cat=Category::all();
        $albums =Album::all();
        return view('frontend.album.index',compact('albums'),compact('cat'))    ;
    }
    public function download()
    {
        $cat=Category::all();
        $albums =Album::all();
        return view('frontend.download_albums.index',compact('albums'),compact('cat'))    ;
    }
}
