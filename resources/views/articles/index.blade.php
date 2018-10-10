@extends('layouts.dash')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        @include('inc.messages')
        <div class="header">
          <h4 class="title pull-left">Article's List</h4>
          <a class="pull-right btn btn-info btn-fill" href="{{ route('articles.create') }}">Add New</a>
        </div>
        <div class="content table-responsive table-full-width">
          <table class="table table-striped">
            <thead>
              <th>N/S</th>
              <th>Title</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            
            <tbody>
              @foreach($articles as $article)
              <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$article->title}}</td>
                <td><a class="btn btn-primary" href="{{ route('articles.edit', $article->id) }}">Edit</a></td>
                <td>
                  <form id="form-data-{{$article->id}}" action="{{ route('articles.destroy', $article->id) }}" method="post" style="display: none;">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                  </form>
                  <a class="btn btn-danger" href="" onclick="if (confirm('Are you sure you want to delete this?')) {
                    event.preventDefault();
                    document.getElementById('form-data-{{$article->id}}').submit();
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
