@extends('layouts.header-and-footer')
@section('content')
	<!-- checkout -->
	<div class="checkout">
		<div class="container1">
			<h2>Your shopping cart contains: <span>{{ count(Cart::content()) }} Products</span></h2>
			 @if(Session::has('sucess'))
                     <div class="alert alert-success">
                           <i><p>{{ Session::get('sucess')}}</p></i>
                     </div>
           	 @endif
           	 @if(Session::has('warning'))
                     <div class="alert alert-success">
                           <i><p>{{ Session::get('warning')}}</p></i>
                     </div>
           	 @endif
			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>ID</th>	
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Discount</th>
							<th>Amount</th>
							<th>Remove</th>
						</tr>
					</thead>
					<?php $dem =1 ?>
					@foreach(Cart::content() as $item)
					<tr class="rem1">
						<td class="invert">{{ $dem++ }}</td>
						<td class="invert-image"><a href="single.html"><img src="{{ asset('uploads/product/'.$item->options->thumbnail) }}" alt=" " class="img-responsive" height="50px" width="50px" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
										{!! Form::open(['method'=>'GET','url'=>'cart/updown/'.$item->rowId."/".$item->qty]) !!}
											{!! Form::submit('-',['class' =>'entry value-minus']) !!}
										{!! Form::close() !!}
									
									<div class="entry value"><span>{{ $item->qty }}</span></div>
										{!! Form::open(['method'=>'GET','url'=>'cart/upgrade/'.$item->rowId."/".$item->qty]) !!}
											{!! Form::submit('+',['class'=> 'entry value-plus active']) !!}
										{!! Form::close() !!}
									<!--<div class="entry value-minus">
									</div>
									<div class="entry value-plus active">
									</div> -->
								</div>
							</div>
						</td>
						<td class="invert">{{ $item->name }}</td>
						
						<td class="invert">{{ number_format($item->price,0,",",".") }}</td>
						@if($item->options->discount == null)
							<td class="invert">0%</td>
						@else
							<td class="invert">{{ $item->options->discount }}%</td>
						@endif
						<td class="invert">{{ number_format($item->subtotal*(100-$item->options->discount)/100,0,",",".") }}</td>
						<td class="invert">
							<div class="rem">
								<a href="{{ url('cart/remove/'.$item->rowId) }}" onclick="return confirm('Are you sure??'')">
									<div class="close1"></div>
								</a>
							</div>
							<!--
							<script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});	  
								});
													   </script>
						</td> -->
					</tr>
					@endforeach
					
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket">
					<h4><a href="{{ url('cart/clear') }}" style="color:white">Remove All Items</a></h4>
				</div>
				<div class="checkout-right-basket">
					<a href="{{ url('cart/order/create') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //checkout -->
@endsection