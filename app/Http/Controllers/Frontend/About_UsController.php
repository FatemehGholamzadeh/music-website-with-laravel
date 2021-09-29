<?php

namespace App\Http\Controllers\Frontend;

use App\models\About_Us;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class About_UsController extends Controller
{
    public function index(Request $request)
    {
        $about_us=About_Us::where('status',1)->get();

        return view('frontend.about_us.about_us',compact('about_us'));
    }

    public function store(Request $Request)
    {
        $this->validate($Request, [
            'email' => 'required',
            'full_name' => 'required',
        ], [
            'email.required' => 'وارد کردن ایمیل الزامی می باشد',
            'full_name.required' => 'وارد کردن نام کامل الزامی می باشد',
        ]);
        $comment_data = [
            'full_name' => request()->input('full_name'),
            'email' => request()->input('email'),
            'phone' => request()->input('phone'),
            'text' => request()->input('text'),
        ];
        $new_comment_obj = About_Us::create($comment_data);
        if ($new_comment_obj instanceof About_Us) {
            return redirect()->route('frontend.about_us.index')->with('success', 'نظر شما  با موفقیت ایجاد گردید و پس از تایید به نمایش گذاشته می شود.');
        } else {
            return redirect()->back()->with('loginError', 'در فرایند ثبت نظر خطایی رخ داده است لطفا بعدا امتحان کنید.');
        }
    }
    public function like_count(Request $request,$id) {

        $countlike = About_Us::where('id',$id)->first();
        $countlike->like_count=$countlike->like_count+1;
        $countlike->save();
        return redirect()->back();
    }

}
