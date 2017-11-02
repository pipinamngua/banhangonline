<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Cart;
use Session;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clients.cart.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $product = Product::findOrFail($id);
        Cart::add(
            [
                'id' => $product->id,
                'name' => $product->name, 
                'qty' => 1, 
                'price' => $product->price, 
                'options' => [
                    'thumbnail' => $product->thumbnail,
                    'discount' => $product->discount
                ]
            ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function updown($id,$quantity)
    {
        if($quantity == 1)
        {
            Session::flash('warning','Không thể giảm số lượng!!');
            return redirect()->back();
        }
        Cart::update($id,$quantity-1);
        return redirect()->back();
    }

    public function upgrade($id,$quantity)
    {
        if($quantity>10)
        {
            Session::flash('warning','Không thể tăng số lượng!!');
            return redirect()->back();
        }
        Cart::update($id,$quantity+1);
        return redirect()->back();
    }
    public function clear()
    {
        Cart::destroy();
        return redirect()->back();
    }
    public function destroy($id)
    {
       
        Cart::remove($id);
        return redirect('cart');
    }
}
