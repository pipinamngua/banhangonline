<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use Session;
use Cart;
use Auth;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.cart.order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(count(Cart::content())==0)
        {
            die("Giỏ hàng của bạn chưa có sản phẩm nào ");
        }

        $this->validate($request,
            [
                'username'=>'required',
                'email' =>'required|email',
                'date_order' => 'required|date',
                'address' =>'required',
                'phone' =>'required|alpha_num'
            ],
            [
                'username.required' => 'Yêu cầu nhập tên người nhận hàng',
                'email.required' =>'Yêu cầu nhập email',
                'email.email' => 'Email không đúng định dạng',
                'date_order.required' =>'Yêu cầu nhập ngày sinh',
                'address.required' =>'Yêu cầu nhập địa chỉ người nhận',
                'phone.required' => 'Yêu cầu nhập số điện thoại người nhận',
                'phone.alpha_num' => 'Số điện thoại không đúng định dạng'
            ]
        );


        $o = new Order();
        $o->name = $request->username;
        $o->phone = $request->phone;
        $o->email = $request->email;
        $o->date_order = $request->date_order;
        $o->address = $request->address;
        $o->note ="Delivering";
        if($request->payment == 0)
        {
            $o->payment = "Tiền mặt";
        }elseif($request->payment == 1)
        {
            $o->payment = "Thẻ ngân hàng";
        }
        
        $o->total = $request->total;
        if(Auth::check() == true)
        {
            $o->user_id = Auth::user()->id;
        }else
        {
            $o->user_id = 0;
        }
        $o->save();
        $total =0;
        $count = count(Order::all());
        foreach(Cart::content() as $item)
        {
            $order_detail = new OrderDetail();
            $order_detail->order_id = $count+1;
            $order_detail->product_id = $item->id;
            $order_detail->product_name = $item->name;
            $order_detail->quantity = $item->qty;
            $order_detail->price = $item->price * $item->quantity;
            $total += $item->subtotal;
            $order_detail->save();

        }
        Session::flash('sucess','Mua hàng thành công');
        return redirect('cart');


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
    public function destroy($id)
    {
        //
    }
}
