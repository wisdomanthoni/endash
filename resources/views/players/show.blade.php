@extends('layouts.dash')

@section('css')
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
						<img style="width: 200px; height: 200px;" src="{{$player->image ?? 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_165ede46b7a%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_165ede46b7a%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E'}}" alt=""/>
						<div class="file btn btn-lg btn-primary">
							Photo
						</div>
					</div>
				</div> 
				<div class="col-md-6">
					<div class="profile-head">
						
						<h6>
							Position: {{ $player->position }}
						</h6>
						<h6>
							Squad Number: {{ $player->squad_number }}
						</h6>
						<h6>
							Date of Birth: {{ $player->date_of_birth }}
						</h6>
						<ul style="margin-top: 18%;" class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a style="color: black;" class="nav-link active" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home" >Bio Data</a style="color: black;">
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<a class="btn btn-primary" href="{{ route('players.edit', $player->id) }}"> Edit Profile </a>
					</div>
				</div>

				
				<div class="row">
					<div class="col-md-4">
						<div class="profile-work">
							<h3 style="margin-top: 15px;"></h3>
							<p style="margin-top: 10px;">{{ $player->about_player }}</p>
							<p>SOCIAL LINK</p>
							<a href="{{ $player->facebook }}" target="_blank">Facebook</a><br/>
							<a href="{{ $player->twitter }}" target="_blank">Twitter</a><br/>
							<a href="{{ $player->instagram }}" target="_blank">Instagram</a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="tab-content profile-tab" id="myTabContent">
							
							<div class="row">
								<div class="col-md-6">
									<label>Name</label>
								</div>
								<div class="col-md-6">
									<p>{{ $player->name }}</p>
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
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	@endsection
