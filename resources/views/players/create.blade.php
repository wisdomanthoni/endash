@extends('layouts.dash')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-1">
            
        </div>
        <div class="col-lg-8 col-md-7">
            <div class="card">
                @include('inc.messages')
                <div class="header">
                    <h4 class="title">Create Profile</h4>
                </div>
                <div class="content">
                    <form method="POST" action="{{ route('players.store') }}">
                        {{ csrf_field() }}
                        {{method_field('POST')}}
                        <div class="row">
                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control border-input" placeholder="Player Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Position</label>
                                    <input type="text" name="position" class="form-control border-input" placeholder="Player Position">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Squad Number</label>
                                    <input type="number" name="squad_number" class="form-control border-input" placeholder="Squad Number">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control border-input" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-control border-input" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Date of Birth</label>
                                    <input type="date" name="date_of_birth"  class="form-control border-input" >

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Previous Club</label>
                                    <input type="text" name="previous_club"  class="form-control border-input" placeholder="Previous Club">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="url" name="facebook" class="form-control border-input"  placeholder="Facebook Profile URL" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="url" name="twitter" class="form-control border-input" placeholder="Twitter Handle Link">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="url" name="instagram" class="form-control border-input" placeholder="Instagram Handle Link">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Player</label>
                                    <textarea rows="5" name="about" class="form-control border-input" placeholder="Here can be your description">
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
