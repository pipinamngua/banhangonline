@extends('layouts.header-and-footer')
@section('content')
<div class="main">
	<div class="content">
		<div class="section group">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="background-color: #f1f1f1;text-align: center;">
				<br>
				<h1>Account Dashboard</h1>
				<br>
				<h1>
					<img src="{{ asset('uploads/users/'.Auth::user()->avatar) }}" width="50px" height="50px">
					<br>
					{{ Auth::user()->name }}
				</h1>
				<br>
				<ul>
					<li style="background-color: #53EF0E;padding:7px">
						<a class="ico ico-user" href="{{ url('profile') }}">
							<p style="font-size: 20px;">Profile</p>
						</a>
					</li>
					<li style="padding:7px">
						<a class="ico ico-user" href="{{ url('profile/orders/') }}">
							<p style="font-size: 20px">Orders</p>
						</a>
					</li>
					<li style="padding:7px" style="padding:7px">
						<a class="ico ico-user" href="{{ url('profile/reviews') }}">
							<p style="font-size: 20px">Reviews</p>
						</a>
					</li>
					<li style="padding:7px">
						<a class="ico ico-user" href="{{ url('profile/contacts') }}">
							<p style="font-size: 20px">Contacts</p>
						</a>
					</li>
				</ul>
				<br>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<table class="table table-bordered table-striped">
					@if(Session::has('failed'))
						<p style="color: #00F0FF">{{ Session::get('failed') }}</p>
					@endif
					<p style="color: red;list-style-type: afar;object-position: bottom;">{{ $errors->first('password', ':message') }}</p>
					{!! Form::open(['method' => 'POST', 'url' => 'profile/change-password/'.Auth::user()->id]) !!}
					<thead>
						<tr>
							<th colspan="2" style="text-align: center;">Change Password</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Password</td>
							<td>
								{!! Form::password('old_password', ['class' => 'form-control']) !!}
							</td>
						</tr>
						<tr>
							<td>New Password</td>
							<td>
								{!! Form::password('password', ['class' => 'form-control']) !!}
							</td>
						</tr>
						<tr>
							<td>Confirm Password</td>
							<td>
								{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;">
								{!! Form::submit('Save') !!}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
