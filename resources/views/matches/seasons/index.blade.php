@extends('layouts.dash')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-flag-alt-2"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Add Seasons</p>
                                    {{$seasons->count()}}
                            </div>
                        </div>
                         <div class="col-lg-12 ">
                                @include('inc.messages')
                                <div class="content">
                                    <form method="POST" action="{{ route('seasons.store') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{method_field('POST')}}

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" name="name" class="form-control timepicker border-input" placeholder="2017/2018">
                                                </div>
                                            </div>
                                         
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Start Date</label>
                                                    <input type="date" name="start"  class="form-control border-input" >

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="date">End Date</label>
                                                    <input type="date" name="end"  class="form-control border-input" >

                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-fill btn-wd">Add Season</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                        </div>

                    </div>
                    <div class="footer">
                        <hr />
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
        <div class="card">
            @include('inc.messages')
            <div class="header">
            <h4 class="title pull-left">Seasons List</h4>
            </div>
            <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                <th>N/S</th>
                <th></th> 
                <th>Start</th>
                <th>End</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                
                <tbody>
                @foreach($seasons as $season)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$season->name}}</td>
                        <td>{{$season->start}}</td>
                        <td>{{$season->end}}</td>
                        <td><a class="btn btn-primary" href="{{ route('seasons.edit', $season->id) }}">Edit</a></td>
                        <td>
                        <form id="form-data-{{$season->id}}" action="{{ route('seasons.destroy', $season->id) }}" method="post" style="display: none;">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                        </form>
                        <a class="btn btn-danger" href="" onclick="if (confirm('Are you sure you want to delete this?')) {
                            event.preventDefault();
                            document.getElementById('form-data-{{$season->id}}').submit();
                        } else {
                            event.preventDefault();}">Delete</a>
                        </td> 
                    </tr>
                @endforeach
                </tbody>
                </table>            
            </div>
            </div>
        </div>
    </div>
  </div>
  @endsection
