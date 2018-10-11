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
                    <h4 class="title">Create Match</h4>
                </div>

                <div class="content">
                    <form method="POST" action="{{ route('matches.store') }}">
                        {{ csrf_field() }}
                        {{method_field('POST')}}

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Season</label>
                                    <select name="season" class="form-control border-input" id="">
                                       <option selected disabled> Choose Season </option>
                                        @forelse ($seasons as $season)
                                             <option value="{{$season->id}}">{{$season->name}}</option>
                                        @empty
                                            <option disabled> No Season Added</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" name="date"  class="form-control border-input" >

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Time</label>
                                    <input type="text" name="time" class="form-control timepicker border-input" placeholder="Match Time">
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Home Club</label>
                                    <select name="home"  class="selectpicker form-control" data-live-search="true" placeholder="Select Competition">
                                        <option style="background: #5cb85c; color: #fff;" selected disabled>Select Home Team</option>
                                        @forelse ($clubs as $club)
                                             <option value="{{$club->id}}">{{$club->name}}</option>
                                        @empty
                                            <option disabled> No Club Added</option>
                                        @endforelse
                                    </select>                              
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Away Club</label>
                                    <select name="away" class="selectpicker form-control" data-live-search="true"  placeholder="Select Competition">
                                        <option style="background: #5cb85c; color: #fff;" selected disabled>Select Away Team</option>
                                        @forelse ($clubs as $club)
                                             <option value="{{$club->id}}">{{$club->name}}</option>
                                        @empty
                                            <option disabled> No Club Added</option>
                                        @endforelse                                  
                                     </select>                                
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Competition</label>
                                    <select name="competition" class="selectpicker form-control" data-live-search="true" >
                                        <option style="background: #5cb85c; color: #fff;" selected disabled>Select Competition</option>
                                        @forelse ($competitions as $competition)
                                             <option value="{{$competition->id}}">{{$competition->name}}</option>
                                        @empty
                                            <option disabled> No Competition Added</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Create Match</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection

@push('style')
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
   {{-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css"> --}}
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/timepicker@1.11.12/jquery.timepicker.min.css">
@endpush


@push('scripts')
   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
   {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script> --}}
   <script src="https://cdn.jsdelivr.net/npm/timepicker@1.11.12/jquery.timepicker.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
             $('.timepicker').timepicker({ 
                 'minTime': '2:00pm',
                 'maxTime': '11:30pm',
                 'timeFormat': 'g:ia',
                 'step': 15,
                 'scrollDefault': 'now'
            });
      });
	</script>

@endpush