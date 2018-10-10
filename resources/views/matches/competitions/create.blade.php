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
                    <h4 class="title">Create Competition</h4>
                </div>

                <div class="content">
                    <form method="POST" action="{{ route('competitions.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('POST')}}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="name" class="form-control timepicker border-input" placeholder="Match Time">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image"  class="form-control border-input" >
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" name="start"  class="form-control border-input" >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">End Date</label>
                                    <input type="date" name="end"  class="form-control border-input" >

                                </div>
                            </div>
                        </div>
                        

                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Create Competition</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
