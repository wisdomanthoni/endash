@extends('layouts.dash')

@section('content')
     <div class="container-fluid">
         
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title pull-left">Match Center</h4>
                        <a class="pull-right btn btn-info btn-fill" href="{{ route('players.create') }}">Add New</a>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Competition</th>
                                <th>Home</th>
                                <th>Away</th>
                                <th>Score</th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td>Oud-Turnhout</td>
                                    <td><a class="btn btn-primary">Edit</a></td>
                                    <td>
                                    <form id="form-data-" action=" " method="post" style="display: none;">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                    </form>
                                    <a class="btn btn-danger" href="" onclick="if (confirm('Are you sure you want to delete this?')) {
                                        event.preventDefault();
                                        document.getElementById('form-data-').submit();
                                    } else {
                                        event.preventDefault();}">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <i class="ti-cup"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Competitions</p>
                                     24
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                             <a href="{{ route('competitions.index')}}" class="btn btn-sm btn-warning stats">
                                <i class="ti-pencil"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-success text-center">
                                    <i class="ti-flag-alt-2"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Seasons</p>
                                     9
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                           <a href="{{ route('seasons.index')}}" class="btn btn-sm btn-warning stats">
                                <i class="ti-pencil"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-error text-center">
                                    <i class="ti-basketball"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Clubs</p>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <a href="{{ route('clubs.index')}}" class="btn btn-sm btn-warning stats">
                                <i class="ti-pencil"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
@endsection


