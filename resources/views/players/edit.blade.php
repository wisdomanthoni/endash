@extends('layouts.dash')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-5">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Players</h4>
                </div>
                <div class="content">
                    <ul class="list-unstyled team-members">
                        <li>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    DJ Khaled
                                    <br />
                                    <span class="text-muted"><small>Offline</small></span>
                                </div>

                                <div class="col-xs-3  text-right">
                                    <button class="btn btn-sm btn-success btn-icon"><i class="fa fa-open"></i></button>
                                    <button class="btn btn-sm btn-success btn-icon"><i class="fa fa-pencil"></i></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-7">
            <div class="card">
                @include('inc.messages')
                <div class="header">
                    <h4 class="title">Create Profile</h4>
                </div>
                <div class="content">
                    <form method="POST" action="{{ route('profile.update', $players->id) }}">
                        {{ csrf_field() }}
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" class="form-control border-input"  placeholder="Company" value="{{$players->company}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control border-input" placeholder="Username" value="{{$players->username}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control border-input" placeholder="Email" value="{{$players->email}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control border-input" placeholder="First Name" value="{{$players->first_name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control border-input" placeholder="Last Name" value="{{$players->last_name}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control border-input" placeholder="Home Address" value="{{$players->address}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control border-input" placeholder="City" value="{{$players->city}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-control border-input" placeholder="Country" value="{{$players->country}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="number" name="postal_code" class="form-control border-input" placeholder="ZIP Code" value="{{$players->postal_code}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Me</label>
                                    <textarea style="text-align: left;" rows="5" name="about_me" class="form-control border-input" placeholder="Here can be your description">
                                        {{$players->about_me}}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Edit Profile</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection