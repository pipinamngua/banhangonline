<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset($request)){
            $keyword = $request->keyword;
            $users = User::where('name', 'like', '%' . $keyword . '%')->get();
        }
        else {
            $users = User::all();
        }
        return view('admin.user.list-users', ['users' => $users ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:6',
            'dob' => 'date|required',
            'gender' => 'required',

        ],[
            'name.required' => 'Tên không được để trống',
            'name.unique' => 'Tên đăng nhập đã tồn tại',
            'email.required' => 'Email không được để trống',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Password không được để trống',
            'password.min' => 'Password phải lớn hơn 6 ký tự',
            'dob.required' => 'Ngày sinh không được để trống',
            'dob.date' => 'Ngày sinh không đúng định dạng',
            'gender.required' => 'Giới tính bắt buộc chọn'
        ]);

        $n = new User();

        if($request->hasFile('avatar')) {

            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName().date('Y-m-d H:i:s');
            $fileName = md5($fileName).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/users/'), $fileName);
            $n->avatar = $fileName;

        } else {
            $fileName = 'no-avatar.png';
            $n->avatar = $fileName;
        }

        $n->name = $request->name;
        $n->gender = $request->gender;
        $n->email = $request->email;
        $n->password = Hash::make($request->password);
        $n->dob = $request->dob;
        $n->address = $request->address;
        $n->phone = $request->phone;
        $n->save();

        Session::flash('success', 'Thêm mới thành công');

        return redirect('admin/user/create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::findOrFail($id);

        return view('admin.user.edit-user', ['item' => $item]);
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
        $this->validate($request, [
            'dob' => 'date|required',
        ],[
            'dob.required' => 'Ngày sinh không được để trống',
            'dob.date' => 'Ngày sinh không đúng định dạng'
        ]);
        $user = User::findOrFail($id);
        if($request->email != $user->email || $request->email == '') {
            $this->validate($request,[
                'email' => 'required|unique:users'
            ],[
                'email.unique' => 'Email đã được đăng ký',
                'email.required' => 'Email không được để trống'
            ]);
            $user->email == $request->email;
        }
         if($request->hasFile('avatar')) {

            $fileName = 'no-avatar.png';
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName().date('Y-m-d H:i:s');
            $fileName = md5($fileName).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/users/'), $fileName);
            $user->avatar = $fileName;

        }
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();

        Session::flash('success', 'Chỉnh sửa thành công');
        
        return redirect('admin/user/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        Session::flash('success', 'Xóa thành công');

        return redirect('admin/user/show');
    }

    public function upgrade($id)
    {
        $user = User::findOrFail($id);
        if($user->group_id < 3)
        {
            Session::flash('up-failed', 'Upgrade failed');
        } else {
            $user->group_id = $user->group_id - 1;
            $user->save();
        }

        return redirect('admin/user/show');
    }

    public function downgrade($id)
    {
        $user = User::findOrFail($id);
        if($user->group_id == 3 || $user->group_id == 1)
        {
            Session::flash('down-failed', 'Downgrade failed');
        } else {
            $user->group_id = $user->group_id + 1;
            $user->save();
        }

        return redirect('admin/user/show');
    }
}
