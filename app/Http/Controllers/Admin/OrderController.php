<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $data = DB::table('orders')
			->join('users', 'orders.id_user', '=', 'users.id')
			->select('orders.id', 'orders.sum_salary', 'users.name', 'orders.created_at')
			->orderBy('orders.created_at', 'desc')
			->get();

        return view("admin.orders",  ["data" => $data]);
    }

    public function viewDetail($id)
    {
        $data = DB::table('orders')
            ->where('orders.id', $id)
			->join('users', 'orders.id_user', '=', 'users.id')
			->select('users.name','users.address','users.phone_number','orders.product','orders.sum_salary')
			->orderBy('orders.created_at', 'desc')
            ->get();
        return view("admin.orderDetail", ["data" => $data]);
    }
}
