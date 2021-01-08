<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;

class BuyProductController extends Controller
{
    function order(Request $request){
        $user_id = $request->input('id');
        $products = $request->input('product');
        $sumPrice = $request->input('sumPrice');

        $newOrder = new Order();
        $newOrder->id_user = $user_id;
        $newOrder->product = json_encode($products);
        $newOrder->sum_salary = $sumPrice;
        $newOrder->save();
        
        DB::table('carts')->where('id_user', $user_id)->delete();
        
        $data = array("data" => null);
        return response()->json($data, 200);
    }


}
