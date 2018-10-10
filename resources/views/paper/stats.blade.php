
<div id="played" class="modal" tabindex="-1" role="dialog">
  <!-- Modal content -->
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="closeModal('played')" data-dismiss="modal" aria-label="Close">
            <span class="close">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="content">
                <form method="POST"  class="form-inline m-auto"action="{{ route('statistics') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('POST')}}

                    <div class="flex-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
                        </div>
                      
                    </div>

                    <div class="clearfix"></div>
                </form>
            </div>

         {{--  <form method="POST" action="{{ route('statistics') }}" enctype="multipart/form-data">
            <div class="form-group">
                <input type="number" class="form-control" id="exampleInputAmount" placeholder="Amount">
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Update</button>
         </form> --}}
      </div>
    </div>
  </div>
</div>


<div id="won" class="modal" tabindex="-1" role="dialog">
  <!-- Modal content -->
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="closeModal('won')" data-dismiss="modal" aria-label="Close">
            <span class="close">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="content">
                <form method="POST" action="{{ route('statistics') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('POST')}}

                    <div class="flex-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
                        </div>
                      
                    </div>

                    <div class="clearfix"></div>
                </form>
            </div>

      </div>
    </div>
  </div>
</div>


<div id="lost" class="modal" tabindex="-1" role="dialog">
  <!-- Modal content -->
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="closeModal('lost')" data-dismiss="modal" aria-label="Close">
            <span class="close">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="content">
                <form method="POST" action="{{ route('statistics') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('POST')}}

                    <div class="flex-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
                        </div>
                      
                    </div>

                    <div class="clearfix"></div>
                </form>
            </div>

      </div>
    </div>
  </div>
</div>


<div id="drawn" class="modal" tabindex="-1" role="dialog">
  <!-- Modal content -->
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="closeModal('drawn')" data-dismiss="modal" aria-label="Close">
            <span class="close">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="content">
                <form method="POST"  class="form-inline m-auto"action="{{ route('statistics') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('POST')}}

                    <div class="flex-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
                        </div>
                      
                    </div>

                    <div class="clearfix"></div>
                </form>
            </div>

      </div>
    </div>
  </div>
</div>


<div id="goals" class="modal" tabindex="-1" role="dialog">
  <!-- Modal content -->
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="closeModal('goals')" data-dismiss="modal" aria-label="Close">
            <span class="close">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="content">
                <form method="POST"  class="form-inline m-auto"action="{{ route('statistics') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('POST')}}

                    <div class="flex-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
                        </div>
                      
                    </div>

                    <div class="clearfix"></div>
                </form>
            </div>

      </div>
    </div>
  </div>
</div>


<div id="points" class="modal" tabindex="-1" role="dialog">
  <!-- Modal content -->
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="closeModal('points')"  data-dismiss="modal" aria-label="Close">
            <span class="close">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="content">
                <form method="POST"  class="form-inline m-auto"action="{{ route('statistics') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('POST')}}

                    <div class="flex-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
                        </div>
                      
                    </div>

                    <div class="clearfix"></div>
                </form>
            </div>

      </div>
    </div>
  </div>
</div>

