@extends('layouts.header-and-footer')
@section('page-product')
<div class="header_bottom_right">
				<div class="group section">
					@foreach($discountProduct as $item)
					<div class="grid_1_of_4 images_1_of_4" style="width: 23.8% !important; height: 320px; margin-left: 0 !important; margin-right: 1%;" >
						@if(isset($item->thumbnail))
							<a href="{{ url('product/'.$item->id.'/'.$item->slug) }}"><img src="{{ asset('uploads/product/'.$item->thumbnail) }}" alt="" height="160px" width="130px" /></a>
						@else
							<a href="{{ url('product/'.$item->id.'/'.$item->slug) }}"><img src="{{ asset('uploads/product/no-photo.jpg') }}" alt="" height="160px" width="130px" /></a>
						@endif
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
							<div class="clear"></div>
							
							<div class="add-cart">								
								<h4><a href="{{ url('cart/add/'.$item->id) }}">Add to Cart</a></h4>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					@endforeach
				</div>
</div>
@endsection