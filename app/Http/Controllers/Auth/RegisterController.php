<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'string|min:9',
            'address' => 'string|max:255',
            'dob' => 'date|required'
        ],[
            'name.required' => 'Tên bắt buộc phải nhập',
            'name.max' => 'Tên quá dài',
            'email.required' => 'Email bắt buộc nhập',
            'email.email' => 'Email chưa đúng định dạng',
            'email.unique' => 'Email đã được đăng ký',
            'email.max' => 'Email quá dài',
            'password.required' => 'Password không được để trống',
            'password.min' => 'Password quá ngắn',
            'password.confirmed' => 'Mật khẩu phải trùng nhau',
            'phone.min' => 'Số điện thoại phải lớn hơn 9 chữ số',
            'address.max' => 'Địa chỉ quá dài',
            'dob.date' => 'Ngày sinh phải có dạng DD/MM/YYYY',
            'dob.required' => 'Ngày sinh bắt buộc nhập'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'address' => $data['address'],
            'dob' => $data['dob']
        ]);
    }
}

// C:\xampp\htdocs\project\app\Http\Controllers\Auth