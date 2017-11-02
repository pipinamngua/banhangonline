@extends('layouts.header-and-footer')
@section('content')
<link href="{{ asset('css/w3.css') }}" rel="stylesheet">
<link href="{{ asset('css/styleCompare.css') }}" rel="stylesheet">
<script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('js/Compare.js') }}"></script>
<div class="w3-container">
        <div class="w3-row-padding">
        	@foreach($_SESSION['compare'] as $key => $value)
				@foreach($product as $item)
					@if($value == $item->id)
		            <div class="w3-col l3 m6  relPos w3-center " style="height: 300px">
		            	@if($item->category_id == 1)
		                	<div class="selectProduct w3-padding" data-id="{{ $item->name }}" data-title="{{ $item->slug }}" data-cate="1" data-condition="{{ $item->configPhone->condition }}" data-warranty="{{ $item->configPhone->warranty_period }}" data-network="{{ $item->configPhone->network_connections }}" data-tablet="{{ $item->configPhone->tablet_connection }}" data-color="{{ $item->configPhone->color }}" data-screensize="{{ $item->configPhone->screen_size }}" data-model="{{ $item->configPhone->model }}" data-operating="{{ $item->configPhone->operating_system_version }}" data-operating="{{ $item->configPhone->operating_system_version }}" data-sim="{{ $item->configPhone->sim_slots }}" data-ram="{{ $item->configPhone->ram_memory }}" data-productsize="{{ $item->configPhone->product_size }}" data-expandable="{{ $item->configPhone->expandable_memory }}" data-feature="{{ $item->configPhone->phone_features }}" data-storage="{{ $item->configPhone->storage_capacity }}" data-screenresolution="{{ $item->configPhone->screen_resolution }}" data-screentype="{{ $item->configPhone->screen_type }}" data-core="{{ $item->configPhone->core }}" data-weight="{{ $item->configPhone->weight }}">
						@elseif($item->category_id == 2)
							<div class="selectProduct w3-padding" data-id="{{ $item->name }}" data-title="{{ $item->slug }}" data-cate="2" data-processor="{{ $item->configLaptop->processor }}" data-operating="{{ $item->configLaptop->operating_system }}" data-memory="{{ $item->configLaptop->memory }}" data-drive="{{ $item->configLaptop->hard_drive }}" data-card="{{ $item->configLaptop->video_card }}" data-display="{{ $item->configLaptop->display }}" data-battery="{{ $item->configLaptop->primary_battery }}" data-warranty="{{ $item->configLaptop->warranty }}" data-ports="{{ $item->configLaptop->ports }}" data-slots="{{ $item->configLaptop->slots }}">
						@else
							<div class="selectProduct w3-padding" data-id="{{ $item->name }}" data-title="{{ $item->slug }}" data-cate="3" data-screen="{{ $item->configTivi->screen_size }}" data-resolution="{{ $item->configTivi->resolution }}" data-processor="{{ $item->configTivi->processor }}" data-wifi="{{ $item->configTivi->wifi_built_in }}" data-web="{{ $item->configTivi->web_browser }}" data-speaker="{{ $item->configTivi->speaker_system }}" data-hdmi="{{ $item->configTivi->hdmi }}" data-usb="{{ $item->configTivi->usb }}" data-weight="{{ $item->configTivi->weight }}" data-warranty="{{ $item->configTivi->warranty }}">
						@endif
		                    <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
		                    <img height="150px" src="{{ url('uploads/product/'.$item->thumbnail) }}" class="imgFill productImg">
		                    <h4>{{ $item->name }}</h4>
		                </div>
		            </div>
		            @endif
				@endforeach
			@endforeach
        </div>
    </div>
	<div class="w3-container  w3-center">
        <div class="w3-row w3-card-4 w3-grey w3-round-large w3-border comparePanle w3-margin-top">
            <div class="w3-row">
                <div class="w3-col l9 m8 s6 w3-margin-top">
                    <h4>Added for comparison</h4>
                </div>
                <div class="w3-col l3 m4 s6 w3-margin-top">
                    &nbsp;
                    <button class="w3-btn w3-round-small w3-white w3-border notActive cmprBtn" disabled>Compare</button>
                </div>
            </div>
            <div class=" titleMargin w3-container comparePan">
            </div>
        </div>
    </div>
    <!--end of preview panel-->
    
    <!-- comparision popup-->
    <div id="id01" class="w3-animate-zoom w3-white w3-modal modPos">
        <div class="w3-container">
            <a onclick="document.getElementById('id01').style.display='none'" class="whiteFont w3-padding w3-closebtn closeBtn">&times;</a>
        </div>
        <div class="w3-row contentPop w3-margin-top">
        </div>

    </div>
    <!--end of comparision popup-->

    <!--  warning model  -->
    <div id="WarningModal" class="w3-modal">
        <div class="w3-modal-content warningModal">
            <header class="w3-container w3-teal">
                <h3><span>&#x26a0;</span>Error</h3>
            </header>
            <div class="w3-container">
                <h4>Maximum of Three products are allowed for comparision</h4>

            </div>
            <footer class="w3-container w3-right-align">
                <button id="warningModalClose" onclick="document.getElementById('id01').style.display='none'" class="w3-btn w3-hexagonBlue w3-margin-bottom  ">Ok</button>
            </footer>
        </div>
    </div>
@endsection