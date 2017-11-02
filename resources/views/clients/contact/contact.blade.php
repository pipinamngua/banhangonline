@extends('layouts.header-and-footer')
@section('content')
 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
				  	@if(Session::has('success'))
						<p style="color: #07DBCF">{{ Session::get('success') }}</p>
				  	@endif
					    {!! Form::open(['method' => 'POST', 'url' => 'contact-us']) !!}
					    	@guest
								<div>
							    	<span><label>Name *</label></span>
							    	<span><input name="userName" type="text" class="textbox" required></span>
							    </div>
							    <div>
							    	<span><label>E-mail *</label></span>
							    	<span><input name="userEmail" type="text" class="textbox" required></span>
							    </div>
							    <div>
							     	<span><label>Phone</label></span>
							    	<span><input name="userPhone" type="text" class="textbox"></span>
							    </div>
							    <div>
							    	<span><label>Subject *</label></span>
							    	<span><textarea name="userMsg" required="required"></textarea></span>
							    </div>
								<div>
								   	<span><input type="submit" value="Submit"  class="myButton"></span>
								</div>
					    	@else
						    	<div>
							    	<span><label>Name *</label></span>
							    	<span><input name="userName" type="text" class="textbox" required value="{{ Auth::user()->name }}"></span>
							    </div>
							    <div>
							    	<span><label>E-mail *</label></span>
							    	<span><input name="userEmail" type="text" class="textbox" required value="{{ Auth::user()->email }}"></span>
							    </div>
							    <div>
							     	<span><label>Phone</label></span>
							    	<span><input name="userPhone" type="text" class="textbox" value="{{ Auth::user()->phone }}"></span>
							    </div>
							    <div>
							    	<span><label>Subject *</label></span>
							    	<span><textarea name="userMsg" required="required"></textarea></span>
							    </div>
								<div>
								   	<span><input type="submit" value="Submit"  class="myButton"></span>
								</div>
						  	@endguest
					    {!! Form::close() !!}
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h3>Find Us Here</h3>
					    	  <div class="map">
							   	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.587285543108!2d105.78743936534637!3d21.08913989108929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aab137031f81%3A0xf8d9becc592aedc7!2zTmjhuq10IFThuqNvLCDEkMO0bmcgTmfhuqFjLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2sin!4v1505821435867" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br><small><a href="https://www.google.com/maps/place/Nh%E1%BA%ADt+T%E1%BA%A3o,+%C4%90%C3%B4ng+Ng%E1%BA%A1c,+T%E1%BB%AB+Li%C3%AAm,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.089135,105.789628,16z/data=!4m5!3m4!1s0x3135aab137031f81:0xf8d9becc592aedc7!8m2!3d21.0892556!4d105.7901382?hl=vi-VN" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				 </div>
			  </div>		
         </div> 
    </div>
 </div>
@endsection