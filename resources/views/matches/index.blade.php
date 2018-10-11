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
                        <table id="match-table" class="table table-sm table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Competition</th>
                                <th>Home</th>
                                <th>Away</th>
                                <th>Score</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Season</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                    <td>5 : 3</td>
                                    <td>5th May</td>
                                    <td>10PM</td>
                                    <td>2017/2018</td>
                                    <td><a class="btn btn-sm btn-primary">Edit</a></td>
                                    <td>
                                        <form id="form-data-" action=" " method="post" style="display: none;">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a class="btn btn-sm btn-danger" href="" onclick="if (confirm('Are you sure you want to delete this?')) {
                                                event.preventDefault();
                                                document.getElementById('form-data-').submit();
                                            } else {
                                                event.preventDefault();}">Delete
                                         </a>
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
{{-- <script src="{{asset('js/table.js')}}"></script>
<script>
   $('#match-table').Tabledit({
        url: '{{route('match.fix')}}',
        debug: true,
        inputClass: 'form-control border-input input-sm',
        hideIdentifier: true,
        buttons: {
            edit: {
                class: 'btn btn-sm btn-primary',
                html: '<span class="ti-pencil"></span>',
                action: 'edit'
            },
            delete: {
                class: 'btn btn-sm btn-default',
                html: '<span class="ti-trash"></span>',
                action: 'delete'
            },
            save: {
                class: 'btn btn-sm btn-success',
                html: 'Save'
            },
            restore: {
                class: 'btn btn-sm btn-warning',
                html: 'Restore',
                action: 'restore'
            },
            confirm: {
                class: 'btn btn-sm btn-danger',
                html: 'Confirm'
            }
        },
        columns: {
            identifier: [0, 'id'],                    
            editable: [
                        [1, 'competition_id'], 
                        [2, 'home'],
                        [3, 'away'],
                        [4, 'home_score'],
                        [5, 'away_score'],
                        [6, 'date'],
                        [7, 'time'],
                        [9, 'season_id']
                    ]
        },
        onDraw: function() {
            console.log('onDraw()');
        },
        onSuccess: function(data, textStatus, jqXHR) {
            console.log('onSuccess(data, textStatus, jqXHR)');
            console.log(data);
            console.log(textStatus);
            console.log(jqXHR);
        },
        onFail: function(jqXHR, textStatus, errorThrown) {
            console.log('onFail(jqXHR, textStatus, errorThrown)');
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
        onAlways: function() {
            console.log('onAlways()');
        },
        onAjax: function(action, serialize) {
            console.log('onAjax(action, serialize)');
            console.log(action);
            console.log(serialize);
        }
    });
</script> --}}

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
