<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view("create");
    }
    public function index1()
    {
        $categories = Category::all();
        return view("categories") ->with('categories',$categories);
    }
    public function store(Request $request)
    {
        $categories= new Category();
        $categories->name = $request->input("name");
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension ;
            $file->move('uploads/categories/' , $filename);
            $categories->image = $filename ;
         }
         else {
             return $request;
             $categories->image = "";
         }
         $categories->save();
         return view("create") ->with('categories',$categories);
    }
    public function edit($id)
    {
        $categories = Category::find($id);

        return view("edit") ->with('categories',$categories);
    }
    public function destroy($id)
    {
        $categories = Category::findorfail($id);
        $categories->delete();
        return redirect("categories")->with("success" , "Data Deleted");
    }


}
