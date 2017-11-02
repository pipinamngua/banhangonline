@extends('layouts.layout-admin')
@section('content')
<section id="main-content">
     <section class="wrapper site-min-height">
         <h3><i class="fa fa-angle-right"></i>Edit User</h3>
         @if(Session::has('success'))
         <p style="color: red">{{ Session::get('success') }}</p>
         @endif
         <div class="row mt">
             <div class="col-lg-12">
               {!! Form::model($item,['url' => ['admin/user/show',$item->id], 
                                      'method' => 'PATCH', 
                                      'files' => true]) !!}
               <table class="table">
                    <tr>
                         <td><label for="name">Name : </label></td>
                         <td>{!! Form::text('name',null,['id' => 'title', 
                                                         'class' => 'form-control',
                                                         'required' => true]) !!}</td>
                        {!! $errors->first('name','<p>:message</p>') !!}
                    </tr>
                    <tr>
                         <td><label for="gender">Gender : </label></td>
                         <td>
                            {!! Form::radio('gender', 'male', true) !!}Male
                            {!! Form::radio('gender', 'female') !!}Female

                         </td>
                        {!! $errors->first('name','<p>:message</p>') !!}
                    </tr>
                    <tr>
                         <td><label for="email">Email : </label></td>
                         <td>{!! Form::text('email',null,['id' => 'email','class' => 'form-control']) !!}</td>
                         {!! $errors->first('email','<p>:message</p>') !!}
                    </tr>
                    <tr>
                         <td><label for="phone">Phone : </label></td>
                         <td>{!! Form::text('phone',null,['id' => 'phone', 'class' => 'form-control']) !!}</td>
                         
                    </tr>
                    <tr>
                         <td><label for="dob">Date of Birth : </label></td>
                         <td>{!! Form::date('dob',null,['id' => 'dob', 'class' => 'form-control', 'required' => true]) !!}</td>
                          {!! $errors->first('dob','<p>:message</p>') !!}
                    </tr>
                    <tr>
                         <td><label for="address">Address : </label></td>
                         <td>{!! Form::text('address',null,['id' => 'address','class' => 'form-control']) !!}</td>
                         
                    </tr>
                    <tr>
                         <td><label for="Avatar">Avatar : </label></td>
                         <td>{!! Form::file('avatar',['class' => 'form-control']) !!}</td>
                         
                    </tr>
                    <tr>
                         <td colspan="2">
                              {!! Form::submit('Save') !!}
                         </td>
                    </tr>
               </table>
               {!! Form::close() !!}
     </div>
</div>

</section>
</section>

@endsection