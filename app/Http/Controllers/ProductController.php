<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.index');
    }

    public function create(){
        return view('admin.product.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required|min:3',
            'image'=>'required|mimes:png,jpg',
            'price'=>'required|numeric',
            'additional_info'=>'required',
            'category'=>'required'
        ]);
        $image = $request->file('image')->store('public/product');

        product::create([

            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$image,
            'price'=>$request->price,
            'additional_info'=>$request->additional_info,
            'category_id'=>$request->category,
            'subcategory_id'=>$request->subcategory
        ]);
        notify()->success('Product created successfully!');
        return redirect()->back();
    }

    public function loadSubCategories(Request $request,$id){
        $subcategory = Subcategory::where('category_id',$id)->pluck('name','id');
        return response()->json($subcategory);
    }
}
