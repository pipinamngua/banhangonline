<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Session;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order = Order::all();

        if($request->has('keyword') && $request->get('keyword') != "")
        {
            $keyword = $request->get('keyword');
            $order = Order::where('name', 'like', '%'. $keyword .'%')->get();
        }

        return view('admin.order.manage-order', ['order' => $order]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);


        return view('admin.order.edit-order',['order'=>$order]);
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
        $this->validate($request,
        [
            'name' => 'required',
            'phone' => 'required|alpha_num|min:10|max:12',
            'email' => 'required|email',
            'address' => 'required',
            'date' => 'required|date',
            'payment' => 'required',
            'total' => 'required|alpha_num'

        ],
        [
            'name.required' => 'Yêu cầu nhập tên',
            'phone.required' => 'Yêu cầu nhập sdt',
            'email.required' => 'Yêu cầu nhập email',
            'address.required' => 'Yêu cầu nhập địa chỉ',
            'date.required' => 'Yêu cầu nhập mua hàng',
            'payment.required' => 'Yêu cầu nhập cách thức mua hàng',
            'total.required' => 'Yêu cầu nhập tổng số tiền',
            'phone.alpha_num' => 'Nhập số ',
            'phone.min' => 'Chưa đúng độ dài số điện thoại',
            'phone.max' => 'Chưa đúng độ dài số điện thoại',
            'email.email' => "Chưa đúng định dạng email",
            'date.date' => 'Chưa đúng định dạng ngày tháng',
            'total.alpha_num' => 'Yêu cầu nhập đúng dạng số tiền'

        ]

        );

        $o = Order::findOrFail($id);
        $o->name = $request->name;
        $o->phone = $request->phone;
        $o->email = $request->email;
        $o->address = $request->address;
        $o->date_order = $request->date;
        $o->payment = $request->payment;
        $o->total = $request->total;
        $o->note = $request->note;
        $o->save();
        Session::flash('sucess', 'Cập nhật thành công');

        return redirect('admin/order');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $o = Order::findOrFail($id);
        $name = $o->name;
        $o->delete();
        Session::flash('sucess', 'Xóa '. $name . ' thành công');
        
        return redirect('admin/order');
    }

     public function showOrderDetail($id)
    {
        $order = Order::findOrFail($id);
        
        return view('admin.order.list-order-detail',['order'=>$order]);
    }

    public function deliveried($id)
    {
        $o = Order::findOrFail($id);
        $o->note = "Deliveried";
        $o->save();
        Session::flash('sucess','Cập nhật trạng thái giao hàng '.$o->name.' thành công!!!');
        return redirect('admin/order');
    }

    public function delivering($id)
    {
        $o = Order::findOrFail($id);
        $o->note = "Delivering";
        $o->save();
        Session::flash('sucess','Cập nhật trạng thái giao hàng '.$o->name.' thành công!!!');
        return redirect('admin/order');
    }
}
