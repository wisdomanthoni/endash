@extends('layouts.dash')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-5">
            <div class="card card-user">
                <div class="image">
                    <img src="/assets/img/background.jpg" alt="..."/>
                </div>
                <div class="content">
                    <div class="author">
                    <img class="avatar border-white" src="{{ $players->image }}" alt="Player Image"/>
                        <h4 class="title"> {{ $players->name }}<br />
                            <a href="#"><small>{{ $players->position }}</small></a>
                        </h4>
                    </div>
                    <p class="description text-center">
                       	Previous Club: {{ $players->previous_club }} <br>
                        Squad Number: {{ $players->squad_number }} <br>
                        Date of Birth: {{ $players->date_of_birth }}
                    </p>
                </div>
                <hr>
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-3 col-md-offset-1">
                            <h5><a target="_blank" href="{{ $players->facebook }}"> <span class="ti-facebook"></span> </a><br /><small>Facebook</small></h5>
                        </div>
                        <div class="col-md-4">
                            <h5><a target="_blank" href="{{ $players->twitter }}"> <span class="ti-twitter"></span> </a><br /><small>Twitter</small></h5>
                        </div>
                        <div class="col-md-3">
                            <h5><a target="_blank" href="{{ $players->instagram }}"> <span class="ti-instagram"></span> </a><br /><small>Intstagram</small></h5>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-8 col-md-7">
            <div class="card">
                @include('inc.messages')
                <div class="header">
                    <h4 class="title">Edit Profile</h4>
                </div>
                <div class="content">
                    <form method="POST" action="{{ route('players.update', $players->id) }}">
                        {{ csrf_field() }}
                        {{method_field('PATCH')}}
                        <div class="row">
                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control border-input" placeholder="Player Name" value="{{ $players->name }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Position</label>
                                    <input type="text" name="position" class="form-control border-input" value="{{ $players->position }}" placeholder="Player Position">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Squad Number</label>
                                    <input type="number" name="squad_number" class="form-control border-input" value="{{ $players->squad_number }}"placeholder="Squad Number">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control border-input" value="value="{{ $players->city }}"" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-control border-input" value="{{ $players->country }}" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Date of Birth</label>
                                    <input type="date" name="date_of_birth" value="{{ $players->date_of_birth }}" class="form-control border-input" >

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Previous Club</label>
                                    <input type="text" name="previous_club" value="{{ $players->previous_club }}" class="form-control border-input" placeholder="Previous Club">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="url" name="facebook" class="form-control border-input" value="{{ $players->facebook }}"  placeholder="Facebook Profile URL" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="url" name="twitter" class="form-control border-input" value="{{ $players->twitter }}" placeholder="Twitter Handle Link">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="url" name="instagram" class="form-control border-input" value="{{ $players->instagram }}" placeholder="Instagram Handle Link">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Player</label>
                                    <textarea rows="5" name="about" class="form-control border-input" placeholder="Here can be your description">
                                    {{ $players->about_player }}
                                   </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Create Profile</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
               
            </div>
        </div>


    </div>
</div>

@endsection
