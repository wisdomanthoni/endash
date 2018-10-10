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
                    <h4 class="title">Add Club</h4>
                </div>

                <div class="content">
                    <form method="POST" action="{{ route('clubs.update', $club->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Club Name</label>
                                <input type="text" name="name" class="form-control timepicker border-input" value="{{$club->name}}" placeholder="Match Time">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image"  class="form-control border-input" >
                                </div>
                            </div>
                            
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Update Club</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
