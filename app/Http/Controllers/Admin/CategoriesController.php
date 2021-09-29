<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.list',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $newCategory=Category::create([
            'name'=>$request->input('name')

        ]);
        if($newCategory){
            return redirect()->route('admin.categories.list')->with('success','دسته بندی جدید با موفقیت ایجاد گردید');
        }
    }

    public function edit(Request $request,$category_id )
    {
        $catItem = Category::find($category_id);
        return view('admin.category.edit',compact('catItem'));
    }

    public function update(Request $request,$category_id)
    {
        $catItem = Category::find($category_id);
        $updateResult = $catItem->update([
            'name'=>$request->input('name')
        ]);
        if ($updateResult){
            return redirect()->route('admin.categories.list')->with('success','دسته بندی با موفقیت به روز رسانی شد');
        }
    }

    public function remove(Request $request,$category_id)
    {
        $removeResult = Category::destroy([$category_id]);
        if ($removeResult){
            return redirect()->route('admin.categories.list')->with('success','دسته بندی مورد نظر با موفقیت حذف گردید');
        }
    }
}
