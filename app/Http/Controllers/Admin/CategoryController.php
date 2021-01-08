<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;


class CategoryController extends Controller
{
    //hiện trang admin
    function index(){
        return view("admin.dashboard");
    }
    function category(){
        $categories = Category::all();
        return view("admin.categories",["categories"=>$categories]);
    }
    function user(){
        $users = User::all();
        return view("admin.user",["users"=>$users]);
    }

    function product(){
        $products = Product::all();
        $categories = Category::all();
        return view("admin.products",["products"=>$products,"categories"=>$categories]);
    }
    //chỉnh sửa 
    function edit($id){
         $categories = Category::find($id);
         return view("admin.edit",['categories'=>$categories]);
     }

     function update($id, Request $request){
        $categories = Category::find($id);
        $name = $request->name;
        $categories->name =$name;
        $categories->save();

        return redirect()->route('admin.categories');
    }

    function create(){
         return view("admin.create");
    }
  
    function store(Request $request){
      $name = $request->name;

      $categories = new Category;
      $categories->name =$name;
      $categories->save();
  
      return redirect()->route('admin.categories');
     }

     //xóa
    function delete($id){
        Category::find($id)->delete();
        return redirect()->route('admin.categories');
    }

}
