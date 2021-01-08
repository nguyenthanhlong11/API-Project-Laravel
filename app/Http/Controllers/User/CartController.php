<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    function index($id){
        $dataCart = DB::table('carts')
        ->where('id_user', $id)
        ->join('products', 'carts.id_product', '=', 'products.id')
		->select('carts.id','carts.number', 'products.name', 'products.price', 'products.image')
        ->orderBy('carts.created_at', 'desc')
        ->get();

        return response()->json($dataCart, 200);
    }

    function addCart(Request $request){
        $user_id = $request->input('user_id');
        $product_id = $request->input('product_id');

		$cart = Cart::all()->where('id_product', $product_id)
			->where('id_user', $user_id);

		if ($cart->count() == 1) {
            $cartOld = Cart::where('id_product',$product_id)
                            ->where('id_user', $user_id)
                            ->first();
			$quantity = $cartOld->number + 1;
			$cartOld->number = $quantity;
            $cartOld->save();

            $data = array("data" => 'a');
			return response()->json($data, 200);
		} else {
			$cartNew = new Cart;
			$cartNew->id_product = $product_id;
			$cartNew->number = 1;
			$cartNew->id_user = $user_id;
            $cartNew->save();
            
            $data = array("data" => "a");
			return response()->json($data, 200);
		}
    }
}
