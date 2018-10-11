@extends('layouts.dash')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <i class="ti-layout-grid2"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Matches Played</p>
                                     {{$set['played'][0]->val ?? 0 }}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <button class="btn btn-sm btn-warning stats" data-toggle="modal" onclick="toggle('played')">
                                <i class="ti-pencil"></i>
                            </button>
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
                                    <i class="ti-stats-up"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Matches Won</p>
                                     {{$set['won'][0]->val ?? 0 }}                                     
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <button class="btn btn-success btn-sm stats" onclick="toggle('won')">
                                <i class="ti-pencil"></i>
                            </button>
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
                                    <i class="ti-stats-down"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Matches Lost</p>
                                     {{$set['lost'][0]->val ?? 0 }}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <button class="btn btn-error btn-sm stats" onclick="toggle('lost')">
                                <i class="ti-pencil"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-info text-center">
                                    <i class="ti-line-double"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Matches Drawn</p>
                                     {{$set['drawn'][0]->val ?? 0 }}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <button class="btn btn-info btn-sm stats" onclick="toggle('drawn')" data-target="#drawn">
                                <i class="ti-pencil"></i>
                            </button>
                        </div>
                    </div>
                </div>
           </div>

            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <i class="ti-pulse"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Goals Scored</p>
                                     {{$set['goals'][0]->val ?? 0}}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <button class="btn btn-warning btn-sm stats" onclick="toggle('goals')">
                                <i class="ti-pencil"></i>
                            </button>
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
                                    <i class="ti-upload"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Points</p>
                                     {{$set['points'][0]->val ?? 0}}
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <button class="btn btn-success btn-sm stats" onclick="toggle('points')">
                                <i class="ti-pencil"></i>
                            </button>
                        </div>
                    </div>
                </div>
           </div>     
        </div>

        @include('paper.stats')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Users Behavior</h4>
                        <p class="category">24 Hours performance</p>
                    </div>
                    <div class="content">
                        <div id="chartHours" class="ct-chart"></div>
                        <div class="footer">
                            <div class="chart-legend">
                                <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Click
                                <i class="fa fa-circle text-warning"></i> Click Second Time
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="ti-reload"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Email Statistics</h4>
                        <p class="category">Last Campaign Performance</p>
                    </div>
                    <div class="content">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                        <div class="footer">
                            <div class="chart-legend">
                                <i class="fa fa-circle text-info"></i> Open
                                <i class="fa fa-circle text-danger"></i> Bounce
                                <i class="fa fa-circle text-warning"></i> Unsubscribe
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="ti-timer"></i> Campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">2015 Sales</h4>
                        <p class="category">All products including Taxes</p>
                    </div>
                    <div class="content">
                        <div id="chartActivity" class="ct-chart"></div>

                        <div class="footer">
                            <div class="chart-legend">
                                <i class="fa fa-circle text-info"></i> Tesla Model S
                                <i class="fa fa-circle text-warning"></i> BMW 5 Series
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="ti-check"></i> Data information certified
                            </div>
                        </div>
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

@section('css')

@endsection