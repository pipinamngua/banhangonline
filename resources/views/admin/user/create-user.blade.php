@extends('layouts.layout-admin')
@section('content')
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i>Create User</h3>
               @if(Session::has('success'))
                    <p style="color: red">{{ Session::get('success') }}</p>
               @endif
          	<div class="row mt">
          		<div class="col-lg-12">
                         {!! Form::open(['url' => 'admin/user/create', 'method' => 'POST', 'files' => true]) !!}
               			<table class="table table-striped table-advance table-hover">
               				<tr>
                                        <td>Username : </td>
                                        <td>
                                             <input type="text" name="name" id="name" class="form-control">
                                             <p style="color:red">{{ $errors->first('name',':message') }}</p>
                                        </td>
                                           
                                   </tr>
                                   <tr>
                                        <td>Gender</td>
                                        <td>
                                             <input type="radio" name="gender" value="male" checked>Male
                                             <input type="radio" name="gender" value="female">Female
                                             <p style="color:red">{{ $errors->first('gender',':message') }}</p>
                                        </td>
                                        
                                   </tr>
                                   <tr>
                                        <td>Email : </td>
                                        <td>
                                             <input type="text" name="email" id="email" class="form-control">
                                             <p style="color:red">{{ $errors->first('email',':message') }}</p>  
                                        </td>      
                                              
                                   </tr>
                                   <tr>
                                        <td>Date of Birth : </td>
                                        <td>
                                             <input type="date" name="dob" id="dob" class="form-control">
                                             <p style="color:red">{{ $errors->first('dob',':message') }}</p> 
                                        </td>
                                                        
                                   </tr>
                                   <tr>
                                        <td>Address : </td>
                                        <td>
                                             <input type="text" name="address" id="address" class="form-control">
                                        </td>                
                                   </tr>
                                   <tr>
                                        <td>Phone : </td>
                                        <th>
                                             <input type="text" name="phone" id="phone" class="form-control">
                                        </th>                
                                   </tr>
                                   <tr>
                                        <td>Password : </td>
                                        <td>
                                             <input type="password" name="password" id="password" class="form-control">
                                             <p style="color:red">{{ $errors->first('password',':message') }}</p>  
                                        </td>   
                                                   
                                   </tr>
                                   <tr>
                                        <td>Avatar</td>
                                        <td>
                                             {!! Form::file('avatar', ['class' => 'form-control']) !!}
                                        </td>
                                   </tr>
                                   <tr>
                                        <td><input type="submit" name="submit" value="Thêm mới"></td>
                                        <td><input type="reset" name="reset" value="Xóa"></td>
                                   </tr>
               			</table>
                         {!! Form::close() !!}
          		</div>
          	</div>

          </section>
     </section>
          	
@endsection