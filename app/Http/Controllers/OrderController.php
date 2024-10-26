<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;
// use PhpParser\Node\NullableType;

class OrderController extends Controller
{
    //
    // public function CartPlaceOrder(Request $request)
    // {
    //     $order = new Order;
    //     $order->firstname = $request->fname;
    //     $order->lastname = $request->lname;
    //     $order->address = $request->address;
    //     $order->contact = $request->contact;
    //     $order->email = $request->email;
    //     $order->notes = $request->notes;

    //     $cart = session()->post('cart');
    //     session()->put('cart', $cart);
    //     $total = 0;
    //     foreach($cart as $id=>$details)
    //     {
    //         $total += $details['quantity']; $details['price'];
    //     }
    //     $order->total = $total;
    //     $order->save();

    //     session()->forget('cart');
    //     return redirect()->back();

    // }
    public function PlaceOrder(Request $request)
    {
        $order = new Order;
        $order->firstname = $request->fname;
        $order->lastname = $request->lname;
        $order->address = $request->address;
        $order->contact = $request->contact;
        $order->email = $request->email;
        $order->notes = $request->notes;

        $cart = session()->get('cart');
        // session()->put('cart', $cart);
        $total = 0;
        foreach($cart as $id=>$details)
        {
            $total += $details['quantity']; $details['price'];
        }
        $order->total = $total;
        $order->save();

        session()->forget('cart');
        // return view('client.checkout', ['orders' => Order::get() ]);
        return redirect()->back();
    }

    public function CompleteOrder($id)
    {
        $order = Order::find($id);

        if ($order) {
            // Update the order status to 'done'
            $order->status = 'done';
            $order->save(); // Save the changes

            // Redirect with a success message
            return redirect()->route('server-index')->with('success', 'Order marked as done.');
        } else {
            // If order is not found, redirect with an error message
            return redirect()->route('server-index')->with('error', 'Order not found.');
        }
    }
    public function DeleteOrder($id)
    {
        // $order = Order::where('id', $id)->first();
        // $order->delete();
        // return redirect()->route('server-index');
        $order = Order::find($id);

        if ($order) {
            // If order is found, delete it
            $order->delete();

            // Redirect with a success message
            return redirect()->route('server-index')->with('success', 'Order deleted successfully.');
        } else {
            // If order is not found, redirect with an error message
            return redirect()->route('server-index')->with('error', 'Order not found.');
        }


    }
}
