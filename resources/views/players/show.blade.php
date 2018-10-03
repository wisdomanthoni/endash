@extends('layouts.dash')

@section('profile_css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/profile.css') }}">
@endsection

@section('content')

<div class="container-fluid">
	<div class="col-md-12">
		<div class=" emp-profile">
			@foreach($players as $player)
				<div class="row">
					<div class="col-md-4">
						<div class="profile-img">
							<img src="{{ asset('assets/img/faces/legendary.jpg') }}" alt=""/>
							<div class="file btn btn-lg btn-primary">
								Photo
							</div>
						</div>
					</div> 
					<div class="col-md-6">
						<div class="profile-head">
							<h5>
								Username: {{$player->username}}
							</h5>
							<h6 style="margin-top: 7%;">
								Company: {{ $player->company }}
							</h6>
							<ul style="margin-top: 18%;" class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a style="color: black;" class="nav-link active" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home" >Bio Data</a style="color: black;">
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<a class="btn btn-primary" href="{{ route('profile.edit', $player->id) }}"> Edit Profile </a>
						</div>
					</div>

				
				<div class="row">
					<div class="col-md-4">
						<div class="profile-work">
							<h3>About Player</h3>
							<p style="margin-top: -10px;">{{ $player->about_me }}</p>
							<p>SOCIAL LINK</p>
							<a href="">Facebook</a><br/>
							<a href="">Twitter</a><br/>
							<a href="">Instagram</a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="tab-content profile-tab" id="myTabContent">
							
							<div class="row">
								<div class="col-md-6">
									<label>Name</label>
								</div>
								<div class="col-md-6">
									<p>{{ $player->last_name }}, {{ $player->first_name}}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Email</label>
								</div>
								<div class="col-md-6">
									<p>{{ $player->email }}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Address</label>
								</div>
								<div class="col-md-6">
									<p>{{ $player->address }}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>City</label>
								</div>
								<div class="col-md-6">
									<p>{{ $player->city }}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Country</label>
								</div>
								<div class="col-md-6">
									<p>{{ $player->country }}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Postal Code</label>
								</div>
								<div class="col-md-6">
									<p>{{ $player->postal_code }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	@endsection
