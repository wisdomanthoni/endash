@extends('layouts.dash')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        @include('inc.messages')
        <div class="header">
          <h4 class="title pull-left">Competitions List</h4>
          <a class="pull-right btn btn-info btn-fill" href="{{ route('competitions.create') }}">Add New</a>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-striped">
            <thead>
              <th>N/S</th>
              <th></th> 
              <th>Name</th>
              <th>Start</th>
              <th>End</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            
            <tbody>
              @foreach($competitions as $competition)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td><img height="50" width="50" src="{{$competition->image}}" alt=""></td>
                    <td>{{$competition->name}}</td>
                    <td>{{$competition->start}}</td>
                    <td>{{$competition->end}}</td>
                    <td><a class="btn btn-primary" href="{{ route('competitions.edit', $competition->id) }}">Edit</a></td>
                    <td>
                    <form id="form-data-{{$competition->id}}" action="{{ route('competitions.destroy', $competition->id) }}" method="post" style="display: none;">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                    </form>
                    <a class="btn btn-danger" href="" onclick="if (confirm('Are you sure you want to delete this?')) {
                        event.preventDefault();
                        document.getElementById('form-data-{{$competition->id}}').submit();
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
