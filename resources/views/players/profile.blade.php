@extends('layouts.dash')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @include('inc.messages')
                <div class="header">
                    <h4 class="title pull-left">Player's List</h4>
                    <a class="pull-right btn btn-info btn-fill" href="{{ route('profile.create') }}">Add New</a>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th>N/S</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        @foreach($players as $player)
                        <tbody>
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$player->username}}</td>
                                <td>{{$player->email}}</td>
                                <td>{{$player->city}}</td>
                                <td>{{$player->country}}</td>
                                <td><a class="btn btn-success" href="">View</a></td>
                                <td><a class="btn btn-primary" href="{{ route('profile.edit', $player->id) }}">Edit</a></td>
                                <td>
                                    <form id="form-data-{{$player->id}}" action='{{ route('profile.destroy', $player->id) }}' method='post' style="display: none;">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                  </form>
                                  <a class="btn btn-danger" href="" onclick="if (confirm('Are you sure you want to delete this?')) {
                                      event.preventDefault();
                                      document.getElementById('form-data-{{$player->id}}').submit();
                                  } else {
                                      event.preventDefault();}">Delete</a>
                                  </td> 

                              </tr>
                          </tbody>
                          @endforeach
                      </table>

                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
