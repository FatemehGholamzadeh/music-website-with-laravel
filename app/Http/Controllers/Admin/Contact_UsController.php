<?php

namespace App\Http\Controllers\Admin;

use App\models\Contact_Us;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Contact_UsController extends Controller
{
    public function show()
    {
        $about_us=Contact_Us::all();
        return view('admin.about_us.list',compact('about_us'));
    }

    public function okey(Request $request,$id)
    {
        $id = intval($id);
        $aboutItem = Contact_Us::where('id',$id)->update(['status'=>1]);
        return redirect()->route('admin.about_us.show',compact('aboutItem')) ;


    }

    public function remove(Request $request,$id)
    {
        $id = intval($id);
        $aboutItem = Contact_Us::find($id);
        if ($aboutItem){
            $aboutItem->delete();
            return redirect()->route('admin.about_us.show')->with('success', 'اطلاعات  مورد نظر با موفقیت حذف  شد');

        }
    }

}
