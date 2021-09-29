<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Music;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusicsController extends Controller
{
    public function index()
    {
        $files =Music::all();
        $cat=Category::all();
        return view('admin.music.list',compact('files'),compact('cat'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.music.create',compact('categories'));
    }

    public function store(Request $request)
    {
       $this->validate($request,[
           'F_name'=>'required',
           'E_name'=>'required',
           'singer_Fname'=>'required',
           'singer_Ename'=>'required',
           'Lyrics'=>'required',
           'fileItem'=>'required',

       ],[
           'F_name.required'=>'وارد کردن نام فارسی آهنگ الزامی می باشد',
           'E_name.required'=>'وارد کردن نام انگلیسی آهنگ الزامی می باشد',
           'singer_Fname.required'=>'وارد کردن نام فارسی خواننده الزامی می باشد',
           'singer_Ename.required'=>'وارد کردن نام انگلیسی خواننده الزامی می باشد',
           'Lyrics.required'=>'وارد کردن متن آهنگ الزامی می باشد',
           'fileItem.required'=>'وارد کردن فایل آهنگ الزامی می باشد',

       ]);

       $new_file_data=[
           'F_name'=>$request->input('F_name'),
           'E_name'=>$request->input('E_name'),
           'singer_Fname'=>$request->input('singer_Fname'),
           'singer_Ename'=>$request->input('singer_Ename'),
           'subject'=>$request->input('subject'),
        //   'category'=>$request->input('category')->default('ddd'),
         //  'type'=>$request->input('type'),
           'Lyrics'=>$request->input('Lyrics'),
          // 'file_size'=>$request->file('fileItem')->getClientSize()
       ];

       $new_file_name= str_random(45).'.'.$request->file('fileItem')->getClientOriginalExtension();
       $result = $request->file('fileItem')->move(public_path('songs'),$new_file_name);
       if ($result instanceof \Symfony\Component\HttpFoundation\File\File)  {
           $new_file_data['file_name']=$new_file_name;
        //   Music::create($new_file_data);
       }
       $new_image_name='../posters/'.str_random(45).'.'.$request->file('posterItem')->getClientOriginalExtension();
       $result = $request->file('posterItem')->move(public_path('posters'),$new_image_name);
       if ($result instanceof \Symfony\Component\HttpFoundation\File\File)  {
           $new_file_data['image_name']=$new_image_name;
           $test=Music::create($new_file_data);
       }

       if($new_file_data){
           if ($request->has('category')){
               //dd($request['category']);
               $test->categories()->sync($request->input('category'));
           }
       }


        return redirect(route('admin.files.list'))->with('success', 'آهنگ  مورد نظر با موفقیت ثبت شد');


    }

    public function edit(Request $request, $id)
    {
        $id = intval($id);
        $categories=Category::all();
        $musicItem = Music::whereId($id)->first();
        //dd($musicItem);
        return view('admin.music.edit',['fileItem'=>$musicItem,'categories'=>$categories]);

    }


    public function update(Request $Request, $id)
    {
        $id = intval($id);
        $categories=Category::all();
        $musicItem = Music::find($id);
        $updated_music = $musicItem->update(
            [
                'F_name'=>$Request->input('F_name'),
                'E_name'=>$Request->input('E_name'),
                'singer_Fname'=>$Request->input('singer_Fname'),
                'singer_Ename'=>$Request->input('singer_Ename'),
                'subject'=>$Request->input('subject'),
                // 'category'=>$Request->input('category'),
                //  'type'=>$Request->input('type'),
                'Lyrics'=>$Request->input('Lyrics'),
                // 'file_size'=>$Request->file('fileItem')->getClientSize()
            ]
        );
        if ($updated_music) {
            return redirect()->route('admin.files.list',compact('categories'))->with('success', 'اطلاعات  مورد نظر با موفقیت به روزرسانی شد');

        }
        // return redirect()->route('admin.user.list')->with('success','اطلاعات کاربر مورد نظر با موفقیت به روزرسانی شد');
    }

    public function remove(Request $request,$id)
    {
        $id = intval($id);
        $musicItem =Music::find($id);

        if ($musicItem){
            $musicItem->delete();
            return redirect()->route('admin.files.list')->with('success', 'اطلاعات  مورد نظر با موفقیت حذف  شد');

        }

    }
}
