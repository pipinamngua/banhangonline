<?php

?>
@extends('layouts.header-and-footer')
@section('content')
<div class="main">
	<div class="content">
		<div class="section group">
			<div class="cont-desc span_1_of_2">
				<div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
							<div id="products_example">
								<div id="products">
									<div class="slides_container">
										@if(count($information->image) != 0)
										@foreach($information->image as $i)
										<a href="{{ asset('uploads/product/'.$i->name) }}"><img src="{{ asset('uploads/product/'.$i->name) }}" alt=" " /></a>
										@endforeach
										@else
										<a href="#" target="_blank"><img src="{{ asset('uploads/product/no-image.jpg') }}" alt=" " /></a>
										@endif
									</div>
									<ul class="pagination">
										@if(count($information->image) != 0)
										@foreach($information->image as $key => $i)
										<li><a href="#"><img src="{{ asset('uploads/product/'.$i->name) }}" alt=" " /></a></li>
										@endforeach
										@else
										<li><a href="#"><img src="{{ asset('uploads/product/no-image.jpg') }}" alt=" " /></a></li>
										@endif
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="desc span_3_of_2">
						<h2><?=$information->name ?></h2>
						<p><?=$information->content?></p>					
						<div class="price">
							<p>Price: <span><?=number_format($information->price) ?></span></p>
						</div>
						<form action="{{ url('product/'.$information->id) }}" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="available">
								<p>Available Options :</p>
								<ul>
									<li>Quantity:
										<input type="number" name="quantity" id="quantity" min="1" value="1">
									</select></li>
								</ul>
							</div>
							<div class="share-desc">
								<div class="share">
									<p>Share Product :</p>
									<ul>
										<li><a href="#"><img src="{{ asset('images/facebook.png') }}" alt="" /></a></li>
										<li><a href="#"><img src="{{ asset('images/twitter.png') }}" alt="" /></a></li>					    
									</ul>
								</div>
								<div class="button"><a href="{{ url('cart/add/'.$information->id) }}">Add to cart</a></div>
								<div class="clear"></div>
							</div>
						</form>
						<div class="wish-list">
							<ul>
								<li>
									{!! Form::open(['method' => 'POST', 'url' => 'compare/'.$information->id]) !!}
									{!! Form::submit('Add to compare') !!}
									{!! Form::close() !!}
								</li>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="product_desc">	
					<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Product Details</li>
							<li>Product Config</li>
							<li>Product Reviews</li>
							<div class="clear"></div>
						</ul>
						<div class="resp-tabs-container">
							<div class="product-desc">
								<bold>{{ $information->description }}</bold>					
							</div>

							<div class="product-tags">
								<table class="table table-responsive table-striped table-hover">
									@if(isset($config_phone))
									<tr>
										<th>Condition</th>
										<td>{{ $config_phone->condition }}</td>
									</tr>
									<tr>
										<th>Warranty Period</th>
										<td>{{ $config_phone->warranty_period }}</td>
									</tr>
									<tr>
										<th>Network Connection</th>
										<td>{{ $config_phone->network_connections }}</td>
									</tr>
									<tr>
										<th>Tablet Connection</th>
										<td>{{ $config_phone->tablet_connection }}</td>
									</tr>
									<tr>
										<th>Color</th>
										<td>{{ $config_phone->color }}</td>
									</tr>
									<tr>
										<th>Screen Size (inches)</th>
										<td>{{ $config_phone->condition }}</td>
									</tr>
									<tr>
										<th>Model</th>
										<td>{{ $config_phone->model }}</td>
									</tr>
									<tr>
										<th>Operating System Version</th>
										<td>{{ $config_phone->operating_system_version }}</td>
									</tr>
									<tr>
										<th>Sim Slots</th>
										<td>{{ $config_phone->sim_slots }}</td>
									</tr>
									<tr>
										<th>RAM Memory</th>
										<td>{{ $config_phone->ram_memory }}</td>
									</tr>
									<tr>
										<th>Product Size (cm)</th>
										<td>{{ $config_phone->product_size }}</td>
									</tr>
									<tr>
										<th>Expandable Memory</th>
										<td>{{ $config_phone->expandable_memory }}</td>
									</tr>
									<tr>
										<th>Phone Feature</th>
										<td>{{ $config_phone->phone_features }}</td>
									</tr>
									<tr>
										<th>Storage Capacity</th>
										<td>{{ $config_phone->storage_capacity }}</td>
									</tr>
									<tr>
										<th>Screen Resolution (pixel)</th>
										<td>{{ $config_phone->screen_resolution }}</td>
									</tr>
									<tr>
										<th>Screen Type</th>
										<td>{{ $config_phone->screen_type }}</td>
									</tr>
									<tr>
										<th>Number of Cores</th>
										<td>{{ $config_phone->core }}</td>
									</tr>
									<tr>
										<th>Weight (KG)</th>
										<td>{{ $config_phone->weight }}</td>
									</tr>
									@endif
									@if(isset($config_laptop))
									<tr>
										<th>Processor</th>
										<td>{{ $config_laptop->processor }}</td>
									</tr>
									<tr>
										<th>Operating System</th>
										<td>{{ $config_laptop->operating_system }}</td>
									</tr>
									<tr>
										<th>Memory</th>
										<td>{{ $config_laptop->memory }}</td>
									</tr>
									<tr>
										<th>Hard Drive</th>
										<td>{{ $config_laptop->hard_drive }}</td>
									</tr>
									<tr>
										<th>Video Card</th>
										<td>{{ $config_laptop->video_card }}</td>
									</tr>
									<tr>
										<th>Display</th>
										<td>{{ $config_laptop->display }}</td>
									</tr>
									<tr>
										<th>Primary Battery</th>
										<td>{{ $config_laptop->primary_battery }}</td>
									</tr>
									<tr>
										<th>Warranty</th>
										<td>{{ $config_laptop->warranty }}</td>
									</tr>
									<tr>
										<th>Ports</th>
										<td>{{ $config_laptop->ports }}</td>
									</tr>
									<tr>
										<th>Slots</th>
										<td>{{ $config_laptop->slots }}</td>
									</tr>

									@endif
									@if(isset($config_tv))
									<tr>
										<th>Screen Size</th>
										<td>{{ $config_tv->screen_size }}</td>
									</tr>
									<tr>
										<th>Resolution</th>
										<td>{{ $config_tv->resolution }}</td>
									</tr>
									<tr>
										<th>Processor</th>
										<td>{{ $config_tv->processor }}</td>
									</tr>
									<tr>
										<th>Wi-fi Built-in</th>
										<td>{{ $config_tv->wifi_built_in }}</td>
									</tr>
									<tr>
										<th>Web Browser</th>
										<td>{{ $config_tv->web_browser }}</td>
									</tr>
									<tr>
										<th>Speaker System</th>
										<td>{{ $config_tv->speaker_system }}</td>
									</tr>
									<tr>
										<th>HDMI</th>
										<td>{{ $config_tv->hdmi }}</td>
									</tr>
									<tr>
										<th>USB</th>
										<td>{{ $config_tv->usb }}</td>
									</tr>
									<tr>
										<th>Weight</th>
										<td>{{ $config_tv->weight }}</td>
									</tr>
									<tr>
										<th>Warranty</th>
										<td>{{ $config_tv->warranty }}</td>
									</tr>
									@endif
									@if(isset($config_cam))
									<tr>
										<th>Dimension</th>
										<td>{{ $config_cam->dimension }}</td>
									</tr>
									<tr>
										<th>Weight</th>
										<td>{{ $config_cam->weight }}</td>
									</tr>
									<tr>
										<th>Camera</th>
										<td>{{ $config_cam->camera }}</td>
									</tr>
									<tr>
										<th>Connectivity</th>
										<td>{{ $config_cam->connectivity }}</td>
									</tr>
									<tr>
										<th>Battery</th>
										<td>{{ $config_cam->battery }}</td>
									</tr>
									<tr>
										<th>Microphones</th>
										<td>{{ $config_cam->microphones }}</td>
									</tr>
									<tr>
										<th>Warranty</th>
										<td>{{ $config_cam->warranty }}</td>
									</tr>
									@endif
								</table>
							</div>
							<div class="review">
								@guest
								<div style="text-align: center;">You need to
									<a href="{{ route('login') }}">Login</a> to write you review
								</div>
								<hr>
								@else
								{!! Form::open(['url' => 'product/'.$information->id.'/'.$information->slug, 'method' => 'POST']) !!}
								{!! Form::text('name', Auth::check() ? Auth::user()->name : null, 	['class' => 'form-control',
								'required' => true,
								'placeholder' => 'Your name']) !!}
								<br>
								{!! Form::text('summary',null , ['class' => 'form-control',
								'required' => true,
								'placeholder' => 'Summary']) !!}
								<br>
								{!! Form::text('content', null, ['id' => 'keyword',
								'placeholder' => 'Write your review',
								'class' => 'form-control',
								'required' => true]) !!}
								<br>
								{!! Form::submit('POST') !!}
								{!! Form::close() !!}
								<div class="clear"></div>
								<hr>
								@endguest
								@foreach($review as $key => $value)
								<div id="review">
									<div style="width: 10%;float: left;">
										<img src="{{ url('uploads/users/'.$value->user->avatar) }}" width="50px">
										@if($value->user->id == 1)
										<h3 class="fa fa-star"> {{ $value->user->name }}</h3>
										@else
										<h3>{{ $value->user->name }}</h3>
										@endif
									</div>
									<div style="width: 70%">
										<h3 style="color: #299DDF">{{ $value->summary }}</h3>
										<br>
										<h5>{{ $value->content }}</h5>
										<h6 style="float: right;">Updated at : {{ $value->updated_at }}</h6>
									</div>
									<div class="clear"></div>
									<hr>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion           
		width: 'auto', //auto or any width like 600px
		fit: true   // 100% fit in a container
	});
					});
				</script>		
				<div class="content_bottom">
					<div class="heading">
						<h3>Who viewed this product also viewed</h3>
					</div>
					<div class="clear"></div>
				</div>
				<div class="section group">
					@foreach($suggest as $value)
					<div class="grid_1_of_4 images_1_of_4" style="margin-left: 3%">
						<a href="{{ url('product/'.$value->product->id.'/'.$value->product->slug) }}"><img src="{{ asset('uploads/product/'.$value->product->thumbnail) }}" alt="" height="150px"></a>					
						<div class="price" style="border:none">
							<div class="add-cart" style="float:none">								
								<h4><a href="{{ url('cart/add/'.$value->product->id) }}">Add to Cart</a></h4>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="content_bottom">
					<div class="heading">
						<h3>Related to this product</h3>
					</div>
					<div class="clear"></div>
				</div>
				<div class="section group">
					@foreach($prd as $value)
					<div class="grid_1_of_4 images_1_of_4" style="margin-left: 3%">
						<a href="{{ url('product/'.$value->id.'/'.$value->slug) }}"><img src="{{ asset('uploads/product/'.$value->thumbnail) }}" alt="" height="150px"></a>					
						<div class="price" style="border:none">
							<div class="add-cart" style="float:none">								
								<h4><a href="{{ url('cart/add/'.$value->id) }}">Add to Cart</a></h4>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="rightsidebar span_3_of_1">
				<h2>CATEGORIES</h2>
				<ul>
					@foreach($category as $item)
					<li><a href="{{ url('page-loaisp/'.$item->id) }}">{{ $item['name'] }}</a></li>
					@endforeach
				</ul>
				<div class="section group">
					<br>
					<h2>You may like</h2>
					@foreach($prdS as $value)
					<ul>
						<li>
							<a href="{{ url('product/'.$value->id.'/'.$value->slug) }}">
								<img src="{{ asset('uploads/product/'.$value->thumbnail) }}" width="250px">
								<h5 style="color: #090205;margin-left: 20px">{{ $value->name }}</h5>
							</a>
						</li>
					</ul>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection