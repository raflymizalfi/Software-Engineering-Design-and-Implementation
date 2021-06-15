<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    function login() {
        return view('pages.auth.login');
    }
    
    function register() {
        return view('pages.auth.register');
    }

    function home() {
        return view('pages.home.index');
    }
    
    function services() {
        return view('pages.services.index');
    }
    
    function order(Request $request) {
        return view('pages.order.index', $request->all());
    }

    function history(Request $request) {
        $on_going_orders = Order::where(["user_id" => Auth::id(), "is_done" => false])->get();
        $history_orders = Order::where(["user_id" => Auth::id(), "is_done" => true])->get();
        return view('pages.history.index', ["on_going_orders" => $on_going_orders, "history_orders" => $history_orders]);
    }

    function orderDetail(Request $request, $id) {
        $order = Order::find($id);
        return view('pages.order-detail.index', ["order" => $order]);
    }
}
