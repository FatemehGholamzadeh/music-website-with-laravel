<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Music;
use App\models\musicvideo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MusicVideosController extends Controller
{
    public function index()
    {
        $cat=Category::all();
        $musicvideos = musicvideo::all();
        return view('frontend.musicvideo.index',compact('musicvideos'),compact('cat'))    ;
    }
    public function download(int $id)
    {
        $cat=Category::all();
        $musicvideos = musicvideo::all();
        $musicvideo = musicvideo::find($id);
        return view('frontend.download_musicvideo.index',compact('musicvideos','musicvideo'),compact('cat'))    ;
    }

    public function downloadtwo(Request $request,$id)
    {
        $musicvideoItem = musicvideo::find($id);
        if (!$musicvideoItem) {
            return redirect()->back()->with('musicvideoError', 'فایل درخواستی معتبر نمی باشد');
        }
        $basePath = public_path('videos\\');
        $musicvideoPath = $basePath . $musicvideoItem->file_name;
        return response()->download($musicvideoPath);
    }
    public function downloadthree(Request $request,$id)
    {
        $musicvideoItem = musicvideo::find($id);
        if (!$musicvideoItem) {
            return redirect()->back()->with('musicvideoError', 'فایل درخواستی معتبر نمی باشد');
        }
        $basePath = public_path('videos\\');
        $musicvideoPath = $basePath . $musicvideoItem->file_name;
        $stream = new \App\Http\VideoStream($musicvideoPath);

        return response()->stream(function() use ($stream) {
            $stream->start();
        });

    }
}
