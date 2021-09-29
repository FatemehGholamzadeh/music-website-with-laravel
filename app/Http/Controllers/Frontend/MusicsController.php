<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Music;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusicsController extends Controller
{
    public function index()
    {
        $musics = Music::all();
        $cat=Category::all();

        return view('frontend.music.index',compact('musics'),compact('cat')) ;
    }

    public function download(int $id)
    {
        $musics = Music::all();
        $music = Music::find($id);
        $cat=Category::all();
        return view('frontend.download_music.index')->with(compact('musics','cat','id','music'))    ;


    }

    public function downloadtwo(Request $request,int $music_id){

        $musics = Music::all();
        $cat=Category::all();
        $music_Item = Music::find($music_id);
        $base_path = public_path('songs\\');
        $music_path = $base_path.$music_Item->file_name;
        if(!$music_Item)
        {
        return redirect()->back()->with('musicError','فایل درخواستی معتبر نمی باشد');
        }
        return response()->download($music_path);

        
    }
    public  function search(Request $request)
    {
        //dd($request['search']);
        $MusicItem = Music::all();
        $cat=Category::all();

        //  $search = \Request::get('search');

        $musics=Music::where('F_name','like','%'.$request['search'].'%')->get();

        return view('frontend.music.index',['musics'=>$musics],compact('cat'));

       // dd($result);
    }
    //dd($request);
//return view('frontend.music.index',['musics'=>$MusicItem,'result'=>$musics]);

}
