<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    function login()
    {
        return view('pages.auth.login');
    }

    function register()
    {
        return view('pages.auth.register');
    }

    function home()
    {
        return view('pages.home.index');
    }

    function services()
    {
        return view('pages.services.index');
    }

    function order(Request $request)
    {
        return view('pages.order.index', $request->all());
    }

    function history(Request $request)
    {
        $orders = Order::where(["user_id" => Auth::id()])->get();
        return view('pages.history.index', ["orders" => $orders]);
    }

    function orderDetail(Request $request, $id)
    {
        $order = Order::find($id);
        return view('pages.order-detail.index', ["order" => $order]);
    }
}
