<?php

namespace App\Http\Controllers\Admin;

use App\Models\Album;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumsController extends Controller
{
    public function index()
    {
        $albums=Album::all();
        return view('admin.album.list',compact('albums'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.album.create',compact('categories'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'F_name'=>'required',
            'E_name'=>'required',
            'singer_Fname'=>'required',
            'singer_Ename'=>'required',
            'Lyrics'=>'required',
            'albumItem'=>'required',

        ],[
            'F_name.required'=>'وارد کردن نام فارسی آلبوم الزامی می باشد',
            'E_name.required'=>'وارد کردن نام انگلیسی آلبوم الزامی می باشد',
            'singer_Fname.required'=>'وارد کردن نام فارسی خواننده الزامی می باشد',
            'singer_Ename.required'=>'وارد کردن نام انگلیسی خواننده الزامی می باشد',
            'Lyrics.required'=>'وارد کردن متن آلبوم الزامی می باشد',
            'albumItem.required'=>'وارد کردن فایل آلبوم الزامی می باشد',
        ]);

        $new_album_data =[
            'F_name'=>$request->input('F_name'),
            'E_name'=>$request->input('E_name'),
            'singer_Fname'=>$request->input('singer_Fname'),
            'singer_Ename'=>$request->input('singer_Ename'),
            'subject'=>$request->input('subject'),
   //         'category'=>$request->input('category'),
        //    'type'=>$request->input('type'),
            'Lyrics'=>$request->input('Lyrics'),
            //  'file_size'=>$request->file('albumItem')->getClientSize()
        ];

        $new_album_name= str_random(45).'.'.$request->file('albumItem')->getClientOriginalExtension();
        $result = $request->file('albumItem')->move(public_path('albums'),$new_album_name);
        if ($result instanceof \Symfony\Component\HttpFoundation\File\File)  {
            $new_album_data['file_name']=$new_album_name;
        //    Album::create($new_album_data);
        }

        $new_image_name= str_random(45).'.'.$request->file('albumItem')->getClientOriginalExtension();
        $result = $request->file('posterItem')->move(public_path('posters'),$new_image_name);
        if ($result instanceof \Symfony\Component\HttpFoundation\File\File)  {
            $new_album_data['image_name']=$new_image_name;
            $test=  Album::create($new_album_data);
        }

        if($new_album_data){
            if ($request->has('category')){
                //dd($request['category']);
                $test->categories()->sync($request->input('category'));
            }
        }
    }




}
