<?php

namespace App\Http\Controllers\Orders;
use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\AddOrderRequest;
use App\Models\Order;
use Illuminate\Contracts\View\View;

class OrdersController extends Controller
{

    public function order_index(): View
    {
        return view('orders.add');
    }

    # Add information about order user
    public function add_order(AddOrderRequest $addOrderRequest){
        $addOrderRequest->store();
        return redirect()->back()->with('success','Add order successfully');
    }
    # order
    public function view($id){
        $ID = decrypt($id);
        $Order = Order::all()->where('id',$ID)->first();
        return view('orders.view',compact('Order'));
    }

    public function view_all(){
        $Orders = Order::all();
        return view('Orders.view_all',compact('Orders'));
    }


}
