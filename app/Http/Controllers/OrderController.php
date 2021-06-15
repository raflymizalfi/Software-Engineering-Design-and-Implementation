<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function booking(Request $request)
    {
        $order = new Order();
        $order->user_id         = Auth::id();
        $order->service_id      = $request->service_id;
        $order->cleaner_id      = $request->cleaner_id;
        $order->payment_method  = $request->payment_method;
        $order->location        = $request->location;
        $order->date            = $request->date;
        $order->time            = $request->time;
        $order->save();

        return redirect("history");
    }

    public function cancel($id)
    {
        Order::find($id)->delete();
        return redirect("history");
    }

    public function finish($id)
    {
        $order = Order::find($id);
        $order->is_done = True;
        $order->save();
        return redirect("history");
    }
}
