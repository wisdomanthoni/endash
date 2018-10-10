@extends('layouts.dash')

@section('content')
     <div class="container-fluid">      
        <div class="row">
            <div class="col-lg-3 col-md-3">
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
                                    {{$competitions->count()}}
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
                                    {{$seasons->count()}}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                        <a href="{{ route('seasons.index')}}" class="btn btn-sm btn-success stats">
                                <i class="ti-pencil"></i>
                            </a>
                        </div>
                    </div>
                </div>
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
                                    {{$clubs->count()}}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <a href="{{ route('clubs.index')}}" class="btn btn-sm btn-error stats">
                                <i class="ti-pencil"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="card">
                    <div class="header">
                        <h4 class="title pull-left">Match Center</h4>
                        <a class="pull-right btn btn-info btn-fill" href="{{ route('matches.create') }}">Add New</a>
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
    </div>

@endsection


@push('scripts')
<script>
   function toggle(modal){
        var m = document.getElementById(modal);
        m.style.display = "block";
        m.classList.add('open');
   }

   function closeModal(modal){
        var m = document.getElementById(modal);
        console.log(m);
        m.style.display = "none";
        m.classList.remove('open');
   }

  window.onclick = function(event) {
    var m = document.querySelector('.open')
    if (event.target == m) {
        m.style.display = "none";
        m.classList.remove('open');
    }
  }
</script>
@endpush
