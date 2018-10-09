@extends('layouts.dash')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        @include('inc.messages')
        <div class="header">
          <h4 class="title pull-left">club's List</h4>
          <a class="pull-right btn btn-info btn-fill" href="{{ route('clubs.create') }}">Add New</a>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-striped">
            <thead>
              <th>N/S</th>
              <th>Name</th>
              <th>Position</th>
              <th>Squad Number</th>
              <th>Previous Club</th>
              <th>View</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            
            <tbody>
              @foreach($clubs as $club)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$club->name}}</td>
                    <td>{{$club->position}}</td>
                    <td>{{$club->squad_number}}</td>
                    <td>{{$club->previous_club}}</td>
                    <td><a class="btn btn-success" href="{{ route('clubs.show', $club->id) }}">View</a></td>
                    <td><a class="btn btn-primary" href="{{ route('clubs.edit', $club->id) }}">Edit</a></td>
                    <td>
                    <form id="form-data-{{$club->id}}" action="{{ route('clubs.destroy', $club->id) }}" method="post" style="display: none;">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                    </form>
                    <a class="btn btn-danger" href="" onclick="if (confirm('Are you sure you want to delete this?')) {
                        event.preventDefault();
                        document.getElementById('form-data-{{$club->id}}').submit();
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
