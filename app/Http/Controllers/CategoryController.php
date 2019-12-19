<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function store(Request $request){
    $new=new Category;
    $new->categoryName=$request->input('categoryName');
    $new->item_id=$request->input('itemId');
    $new->save();
           return redirect()->back();

    }
    public function edit(Request $request){
    	         $test=Category::find($request->categoryId);
        $test->categoryName=$request->input('categoryName');

         $test->save();
        return response ()->json ( $test);

    }
    public function delete(Request $request){
    	$test=Category::find($request->categoryId);
    	$test->delete();
        return response ()->json ( $test);
    }
}
