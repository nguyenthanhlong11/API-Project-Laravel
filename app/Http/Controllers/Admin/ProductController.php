<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

//Hiện trang admin
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        echo $products;
        //return view("admin.products", ["categories" => $categories, "products" => $products]);

    }
    public function user()
    {
        $users = User::all();
        return view("admin.users", ["users" => $users]);
    }
//Tạo product
    public function create()
    {
        $categories = Category::all();
        return view("admin.createProduct", ['categories' => $categories]);
    }

//Chỉnh sửa
    public function edit($id)
    {
        $products = Product::find($id);
        return view("admin.editProduct", ['products' => $products]);
    }

//Xóa
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }

//Cập nhật
    public function update($id, Request $request)
    {

        $name = $request->name;
        $price = $request->price;
        $detail = $request->detail;
        $products = Product::find($id);
        $products->name = $name;
        $products->price = $price;
        $products->detail = $detail;
        $products->category_id = $request->type;
        $products->save();
        return redirect('/home/product');
    }

//Thêm
    public function add(Request $req)
    {

        $products = new Product();
        $products->name = $req->name;
        $products->price = $req->price;
        $products->quantity = 1;
        $products->image = $req->file('image')->store("public");
        $products->detail = $req->detail;
        $products->category_id = $req->type;
        $products->save();
        return redirect('/home/product');
    }

}
