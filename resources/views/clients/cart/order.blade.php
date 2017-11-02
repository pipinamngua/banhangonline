@extends('layouts.header-and-footer')
@section('content')
<div class="main">
	<div class="content">
		<div class="section group">
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				{!! Form::open(['method' => 'POST', 'url' => 'cart/order', 'files' => true]) !!}

					<label for="username">Name</label>
					{!! Form::text('username', Auth::check()?Auth::user()->name:null, ['id' => 'username','class' => 'form-control']) !!}
					{!! $errors->first('username','<p style="color:red">:message</p>') !!}
					<br>
					
					<label for="email">Email</label>
					{!! Form::email('email', Auth::check()?Auth::user()->email:null, ['id' => 'email','class' => 'form-control']) !!}
					{!! $errors->first('email','<p style="color:red">:message</p>') !!}
					<br>

					<label for="address">Address</label>
					{!! Form::text('address', Auth::check()?Auth::user()->address:null, ['id' => 'address','class' => 'form-control']) !!}
					{!! $errors->first('address','<p style="color:red">:message</p>') !!}
					<br>

					<label for="phone">Phone</label>
					{!! Form::text('phone', Auth::check()?Auth::user()->phone:null, ['id' => 'phone','class' => 'form-control']) !!}
					{!! $errors->first('phone','<p style="color:red">:message</p>') !!}
					<br>

					<label for="payment">Payment</label>
					{!! Form::select('payment', ['0' =>'Tiền mặt','1' => 'Thẻ ngân hàng']) !!}
					<br>
					<br>

					<?php $total =0 ?>
					@foreach(Cart::content() as $item)
						<?php 
							$total += $item->price*$item->qty;
						?>
					@endforeach
					<label for="total">Total</label>
					{!! Form::text('total',$total, ['id' => 'phone','class' => 'form-control','readonly' => true]) !!}
					<br>
					
					{!! Form::submit('Confirm',['class'=>'btn btn-primary','style'=>'color: white;margin-top: 10px']) !!}

				{!! Form::close() !!}
				
			</div>
		</div>
	</div>
</div>
@endsection
