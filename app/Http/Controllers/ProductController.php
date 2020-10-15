<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        return view("index");
    }
    public function index()
    {
        $products = Product::all();
        $categories = $products->category()->get();
        $users = $products->user()->get();




        return view("createarticle") ->with('products',$products);
    }
    public function store(Request $request)
    {

        $articles= new Product();
        $articles->title = $request->input("title");
        $articles->description = $request->input("des");
        $articles->category_id = $request->get('category_id');
        $articles->user_id = $request->get('user_id');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension ;
            $file->move('uploads/articles/' , $filename);
            $articles->image = $filename ;
         }
         else {
             return $request;
             $articles->image = "";
         }
         $articles->save();
        return view("createarticle" , ['articles'=>$articles ]);
    }
    public function destroy($id)
    {
        $product = Product::find($id)->get();
        $product->delete();
    }
}
