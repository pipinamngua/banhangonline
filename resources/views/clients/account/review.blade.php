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
					<img src="{{ asset('uploads/users/'. Auth::user()->avatar) }}" width="50px" height="50px">
					<br>
					{{ Auth::user()->name }}
				</h1>
				<br>
				<ul>
					<li style="padding:7px">
						<a class="ico ico-user" href="{{ url('profile') }}">
							<p style="font-size: 20px;">Profile</p>
						</a>
					</li>
					<li style="padding:7px">
						<a class="ico ico-user" href="{{ url('profile/orders') }}">
							<p style="font-size: 20px">Orders</p>
						</a>
					</li>
					<li style="background-color: #53EF0E;padding:7px">
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
				<table class="table table-hover table-striped">
					<tr>
						<th>No.</th>
						<th>Username</th>
						<th>Summary</th>
						<th>Content</th>
						<th>Date</th>
					</tr>
					@foreach($review as $key => $item)
					<tr>
						<td>{{ $key + 1 }}</td>
						<td>{{ $item->product->name }}</td>
						<td>{{ $item->summary  }}</td>
						<td>{{ $item->content }}</td>
						<td>{{ $item->updated_at }}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
