<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\File;
use App\models\musicvideo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusicVideoController extends Controller
{
    //
    public function index()
    {
        $musicvideos = musicvideo::all();
        return view('admin.musicvideo.list', compact('musicvideos'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.musicvideo.create',compact('categories'))->with('pane_title', 'آپلود موزیک ویدئو ');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'F_name' => 'required',
            'E_name' => 'required',
            'singer_Fname' => 'required',
            'singer_Ename' => 'required',
            'musicvideoItem' => 'required',
            'musicvideoposter' => 'required',

        ], [
            'F_name.required' => 'وارد کردن نام فارسی الزامی میباشد.',
            'E_name.required' => 'وارد کردن نام انگلیسی الزامی میباشد.',
            'singer_Fname.required' => 'وارد کردن نام فارسی  خواننده الزامی میباشد.',
            'singer_Ename.required' => 'وارد کردن نام انگلیسی خواننده الزامی میباشد.',
            'musicvideoItem.required' => 'وارد کردن موزیک ویدئو الزامی میباشد.',
            'musicvideoposter.required' => 'وارد کردن پوستر الزامی میباشد.',
        ]);
        $new_musicvideo_data = [
            'F_name' => $request->input('F_name'),
            'E_name' => $request->input('E_name'),
            'singer_Fname' => $request->input('singer_Fname'),
            'singer_Ename' => $request->input('singer_Ename'),
            'subject' => $request->input('subject'),
          //  'category' => $request->input('category'),
        //    'type' => $request->input('type'),


        ];
        $new_musicvideo_name = str_random('45') . '.' . $request->file('musicvideoItem')->getClientOriginalExtension();
        $result = $request->file('musicvideoItem')->move(public_path('videos'), $new_musicvideo_name);
        if ($result instanceof \Symfony\Component\HttpFoundation\File\File) {
            $new_musicvideo_data['file_name'] = $new_musicvideo_name;
         //   musicvideo::create($new_musicvideo_data);
        }

        $new_poster_name = str_random('45') . '.' . $request->file('musicvideoposter')->getClientOriginalExtension();
        $result = $request->file('musicvideoposter')->move(public_path('posters'), $new_poster_name);
        if ($result instanceof \Symfony\Component\HttpFoundation\File\File) {
            $new_musicvideo_data['image_name'] = $new_poster_name;
            $test= musicvideo::create($new_musicvideo_data);
        }

        if($new_musicvideo_data){
            if ($request->has('category')){
                //dd($request['category']);
                $test->categories()->sync($request->input('category'));
            }
        }
        return redirect(route('admin.musicvideo.list'))->with('success', 'موزیک ویدئو  مورد نظر با موفقیت ثبت شد');
    }

    public function edit(Request $request, $id)
    {
        $id = intval($id);
        $categories=Category::all();
        $musicVideoItem = musicvideo::find($id);
        return view('admin.musicvideo.edit', compact('musicVideoItem','categories'));

    }


    public function update(Request $Request, $id)
    {
        $id = intval($id);
        $categories=Category::all();

        $musicvideoItem = musicvideo::find($id);
        $updated_musicvideo = $musicvideoItem->update(
            [
                'F_name' => $Request->input('F_name'),
                'E_name' => $Request->input('E_name'),
                'singer_Fname' => $Request->input('singer_Fname'),
                'singer_Ename' => $Request->input('singer_Ename'),
                'subject' => $Request->input('subject'),
                //'category' => $Request->input('category'),
                // 'type' => $Request->input('type'),
            ]
        );
        if ($updated_musicvideo) {
            return redirect()->route('admin.musicvideo.list',compact($categories))->with('success', 'اطلاعات  مورد نظر با موفقیت به روزرسانی شد');

        }
        // return redirect()->route('admin.user.list')->with('success','اطلاعات کاربر مورد نظر با موفقیت به روزرسانی شد');
    }

    public function remove(Request $request,$id)
    {
        $id = intval($id);
        $musicvideoItem = musicvideo::find($id);
        if ($musicvideoItem){
            $musicvideoItem->delete();
            return redirect()->route('admin.musicvideo.list')->with('success', 'اطلاعات  مورد نظر با موفقیت حذف  شد');

        }

    }
}