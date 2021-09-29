<?php

namespace App\Http\Controllers\Frontend;

use App\models\About_Us;
use App\models\Contact_Us;
use App\Models\Music;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Contact_UsController extends Controller
{
    public function index()
    {
        $contact_us=Contact_Us::where('status',1)->get();
        $lovedMusics = Music::all()->sortByDesc('like_count', '3')->take(3);

        return view('frontend.contact_us.contact_us',compact('contact_us','lovedMusics'));
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
        $new_comment_obj = Contact_Us::create($comment_data);
        if ($new_comment_obj instanceof Contact_Us) {
            return redirect()->route('frontend.contact_us.index')->with('success', 'نظر شما  با موفقیت ایجاد گردید و پس از تایید به نمایش گذاشته می شود.');
        } else {
            return redirect()->back()->with('loginError', 'در فرایند ثبت نظر خطایی رخ داده است لطفا بعدا امتحان کنید.');
        }
    }

    public function like_count(Request $request,$id) {
        $countlike = Contact_Us::where('id',$id)->first();
        $countlike->like_count=$countlike->like_count+1;
        $countlike->save();
        return redirect()->back();
    }
}
