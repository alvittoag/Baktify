<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Http\Request;

class Member extends Controller
{
    public function index()
    {

        $carts = Cart::all();
        $allData  = [];
        $grandTotal = 0;

        foreach ($carts as $cart) {
            $allData = $cart;
            $grandTotal += $cart->product->price * $cart->qty;
        }


        return view('member.index', [
            'title' => 'Cart',
            'carts' => $carts,
            'allData' => $allData,
            'grandTotal' => $grandTotal
        ]);
    }

    public function add(Request $request)
    {

        $validateData = $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'qty' => 'required',
        ]);

        Cart::create($validateData);

        return redirect('/cart')->with('success', 'Product Added');
    }

    public function update(Request $request, Cart $cart)
    {

        $validateData = $request->validate([
            'qty' => 'required',
        ]);

        if ($request->qty == '0') {
            Cart::destroy($cart->id);
        }

        Cart::where('id', $cart->id)
            ->update($validateData);


        return redirect('/cart')->with('success', 'Cart Updated');
    }

    public function checkoutPage()
    {

        $carts = Cart::all();
        $allData  = [];
        $grandTotal = 0;

        foreach ($carts as $cart) {
            $allData = $cart;
            $grandTotal += $cart->product->price * $cart->qty;
        }

        $passcode = random_int(100000, 999999);


        return view('member.checkout', [
            'title' => 'Checkout',
            'carts' => $carts,
            'allData' => $allData,
            'grandTotal' => $grandTotal,
            'passcode' => $passcode
        ]);
    }

    public function checkout(Request $request)
    {
        $carts = Cart::all();


        // $validateData = $request->validate([
        //     'passcode' => 'required|confirmed',
        // ]);
        $validateData = $request->validate([
            'passcode' => 'required|confirmed',
        ]);
        foreach ($carts  as $cart) {

            Transaction::create([
                'user_id' => $cart->user_id,
                'product_id' => $cart->product_id,
                'price' => $cart->product->price,
                'qty' => $cart->qty,
                'subtotal' => $cart->product->price * $cart->qty,
                'grandtotal' => $request->grandtotal,
            ]);
        }

        Cart::destroy($carts);

        return redirect('/my-transaction')->with('success', 'Transaction success! You will receive our products soon! Thank you for shopping with us!');
    }

    public function transactionPage()
    {
        $transaction = Transaction::all();
        $allData = [];
        $grandTotal = 0;

        foreach ($transaction as $trans) {
            $allData = $trans;
            $grandTotal += $trans->product->price * $trans->qty;
        }

        return view('member.transaction', [
            'title' => 'My Transaction',
            'transaction' => $transaction,
            'allData' => $allData,
            'grandTotal' => $grandTotal

        ]);
    }
}