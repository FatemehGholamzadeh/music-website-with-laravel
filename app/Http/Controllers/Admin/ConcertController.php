<?php

namespace App\Http\Controllers\Admin;

use App\models\Concert;
use App\models\musicvideo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\MusicsController;

class ConcertController extends Controller
{
      public function index()
      {
          $concerts = concert::all();
           return view('admin.concert.list', compact('concerts'))->with('pane_title', 'لیست کنسرت ها');
       }

       public function create()
       {
          return view('admin.concert.create')->with('pane_title', 'آپلود کنسرت');

       }
        public function store(Request $request)
        {
           $this->validate($request, [
               'singer_Fname' => 'required',
                'singer_Ename' => 'required',
                'location' => 'required',
                'date' => 'required',
                'price' => 'required',

            ], [
                'singer_Fname.required' => 'وارد کردن نام فارسی  خواننده الزامی میباشد.',
                'singer_Ename.required' => 'وارد کردن نام انگلیسی خواننده الزامی میباشد.',
                'location.required' => 'وارد کردن مکان الزامی میباشد.',
               'date.required' => 'وارد کردن تاریخ الزامی میباشد.',
               'price.required' => 'وارد کردن قیمت الزامی میباشد.',
            ]);
            $new_concert_data = [
               'singer_Fname' => $request->input('singer_Fname'),
               'singer_Ename' => $request->input('singer_Ename'),
               'location' => $request->input('location'),
               'date' => $request->input('date'),
               'price' => $request->input('price'),
              // 'file_size_image' => $request->file('concertposter')->getClientSize(),
                //  'musicvideoposter' => $request  ->input('musicvideoposter'),

            ];
            $new_concert_name = str_random('45') . '.' . $request->file('concertposter')->getClientOriginalExtension();
           $result = $request->file('concertposter')->move(public_path('posters'), $new_concert_name);
            if ($result instanceof \Symfony\Component\HttpFoundation\File\File) {
                $new_concert_data['image_name'] = $new_concert_name;
                concert::create($new_concert_data);


           }
            return redirect(route('admin.concert.list'))->with('success', 'کنسرت  مورد نظر با موفقیت ثبت شد');


        }

    public function edit(Request $request, $id)
    {
        $id = intval($id);
        $concerItem = Concert::find($id);

        return view('admin.concert.edit', compact('concerItem'));

    }


    public function update(Request $Request, $id)
    {
        $id = intval($id);
        $concerItem = Concert::find($id);
        $updated_concert = $concerItem->update(
            [
                'singer_Fname' => $Request->input('singer_Fname'),
                'singer_Ename' => $Request->input('singer_Ename'),
                'location' => $Request->input('location'),
                'date' => $Request->input('date'),
                'price' => $Request->input('price'),
            ]
        );
        if ($updated_concert) {
            return redirect()->route('admin.concert.list')->with('success', 'اطلاعات  مورد نظر با موفقیت به روزرسانی شد');

        }
        // return redirect()->route('admin.user.list')->with('success','اطلاعات کاربر مورد نظر با موفقیت به روزرسانی شد');
    }

    public function remove(Request $request,$id)
    {
        $id = intval($id);
        $concerItem = Concert::find($id);
        if ($concerItem){
            $concerItem->delete();
            return redirect()->route('admin.concert.list')->with('success', 'اطلاعات  مورد نظر با موفقیت حذف  شد');

        }

    }
}
