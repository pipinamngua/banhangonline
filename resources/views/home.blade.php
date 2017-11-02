
@extends('layouts.header-and-footer')
@section('slide')

<div class="header_bottom_right">                    
    <div class="slider">                         
        <div id="slider">
            <div id="mover">
                @foreach($slide as $key)
                <div id="slide-1" class="slide">                                
                    <div class="slider-img">
                        <a href="#" target="_blank"><img src="{{ asset('uploads/slide/'.$key->image) }}" alt="learn more" /></a>                                     
                    </div>
                    <div class="slider-text">
                        <h1>Clearance<br><span>SALE</span></h1>
                        <h2> {{ $key->discount }}% OFF</h2>
                        <div class="features_list">
                            <h4>{{ $key->description }}</h4>                                         
                        </div>
                        <a href="{{ url('/page-loaisp/'.$key->link) }}" class="button">Shop Now</a>
                    </div>                         
                    <div class="clear"></div>               
                </div>  
                @endforeach                                              
            </div>      
        </div>
        <div class="clear"></div>                          
    </div>
</div>

@endsection
@section('main')
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Sản phẩm mới</h3>
            </div>
            <div class="see">
                <p><a href="{{ url('/list_new_product') }}">Xem tất cả sản phẩm</a></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="row" style="margin-left: 5px;">
            <div class="section group">
                @foreach($newProduct as $item)
                    <div class="grid_1_of_4 images_1_of_4" style="width: 23.6%">
                        @if(isset($item->thumbnail))
                            <a href="{{ url('product/' . $item->id . '/' . $item->slug) }}">
                                <img style="width: 200px;height: 200px" src="{{ asset('uploads/product/'.$item->thumbnail) }}" alt="" />
                            </a>
                        @else
                            <a href="{{ url('product/' . $item->id . '/' . $item->slug) }}">
                                <img style="width: 200px;height: 200px" src="{{ asset('uploads/product/no-photo.jpg') }}" alt="" />
                            </a>
                        @endif
                        <h2 style="height: 50px">{{ $item->name }}</h2>
                        <div class="price-details">
                            <div class="price-number">
                                <p><span class="rupees">{{ number_format($item->price) }}</span></p>
                            </div>
                            <div class="add-cart">                              
                                <h4><a href="{{ url('cart/add/'.$item->id) }}">Add to Cart</a></h4>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>




        <div class="content_bottom">
            <div class="heading">
                <h3>Sản phẩm giảm giá</h3>
            </div>
            <div class="see">
                <p><a href="{{ url('/list_discount_product') }}">Xem tất cả sản phẩm</a></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            @foreach($productDiscount as $item)
            <div class="grid_1_of_4 images_1_of_4" style="width: 23.6%">
                @if(isset($item->thumbnail))
                    <a href="{{ url('product/' . $item->id . '/' . $item->slug) }}">
                        <img style="width: 200px;height: 200px" src="{{ asset('uploads/product/'.$item->thumbnail) }}" alt="" />
                    </a>
                @else
                    <a href="{{ url('product/' . $item->id . '/' . $item->slug) }}">
                        <img style="width: 200px;height: 200px" src="{{ asset('uploads/product/no-photo.jpg') }}" alt="" />
                    </a>
                @endif                 
                <h2 style="height: 50px">{{ $item->name }}</h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees"><p style="text-decoration: line-through;"> {{ number_format($item->price,0,",",".") }}</p></span></p>
                    </div>
                    <br>
                    <div class="price-number">
                        <p><span class="rupees">
                            <?php 
                            $priceOld = $item->price;
                            $discount = $item->discount;
                            $priceOther = $priceOld*(100-$discount)/100;
                            ?>
                            {{ number_format($priceOther,0,",",".") }}
                        </span></p>
                    </div>
                    <div class="add-cart">                              
                        <h4><a href="{{ url('cart/add/'.$item->id) }}">Add to Cart</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection