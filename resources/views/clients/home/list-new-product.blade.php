@extends('layouts.header-and-footer')
@section('page-product')
<div class="header_bottom_right">
				<div class="group section">
					@foreach($newProduct as $item)
					<div class="grid_1_of_4 images_1_of_4" style="width: 23.8% !important; height: 320px; margin-left: 0 !important; margin-right: 1%;" >
						<a href="{{ url('product/' . $item->id . '/' . $item->slug) }}"><img src="{{ asset('uploads/product/'.$item->thumbnail) }}" alt="" height="160px" width="130px" /></a>
						<h2>{{ $item->name }}</h2>
						<div class="price-details">
							<div class="price-number">
								<p>
									@if($item->discount == 0)
									<span class="rupees" style="font-size: 15">{{ number_format($item->price,0,",",".") }}</span>
									@endif

									@if($item->discount !=0)
									<span class="rupees" style="text-decoration: line-through;font-size: 15">{{ number_format($item->price,0,",",".") }}</span>
									<span class="rupees" style="font-size: 15">{{ number_format($item->price*(100-$item->discount)/100,0,",",".") }}</span>
									@endif
								</p>
							</div>
						
							<div class="add-cart" style="margin-bottom: 0;clear: both;">								
								<h4><a href="{{ url('cart/add/'.$item->id) }}">Add to Cart</a></h4>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					@endforeach
				</div>
</div>

@endsection