<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Music;
use App\Models\musicvideo;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchCatController extends Controller
{
    public function findCatMusic($id)
    {
        $c= Category::whereId($id)->first();
        $musics=$c->musics;
        $cat=Category::all();
        return view('frontend.music.index',compact('musics'),compact('cat'));
    }


    public function findCatMusicvideo($id)
    {
        $c= Category::whereId($id)->first();
        $musicvideos=$c->musicvideos;
        $cat=Category::all();
        return view('frontend.musicvideo.index',compact('musicvideos'),compact('cat'));
    }

    public function findCatAlbum()
    {
        $c= Category::whereId($id)->first();
        $albums=$c->albums;
        $cat=Category::all();
        return view('frontend.album.index',compact('albums'),compact('cat'));
    }

}
