<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index(){
        $dataProduct = Product::all();
        return response()->json($dataProduct, 200);
    }

    function deatilProduct(){
        $product_id = request()->header("Authorization");

        $product = DB::table('products')
			->where("products.id", $product_id)
			->join('categories', 'products.category_id', '=', 'categories.id')
			->select('products.id', 'products.name', 'products.price','products.image', 'products.detail','categories.name AS namecategory')
			->get();
        return response()->json($product, 200);
    }

}
