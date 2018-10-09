@extends('layouts.dash')

@section('content')
<style>
  #my-dropzone .message {
    font-family: "Segoe UI Light", "Arial", serif;
    font-weight: 600;
    color: #0087F7;
    font-size: 1.5em;
    letter-spacing: 0.05em;
  }

    .dropzone .img {
        border: 2px dashed #0087F7;
        background: white;
        border-radius: 5px;
        min-height: 300px;
        padding: 90px 0;
        vertical-align: baseline;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-1">
            
        </div>
        <div class="col-lg-8 col-md-7">
            <div class="card">
                @include('inc.messages')
                <div class="header">
                    <h4 class="title">Create Profile</h4>
                </div>

                <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/api/upload" class="dropzone mb-3" id="filmPicture">
                                {{ csrf_field() }}
                                </form>
                            </div>
                            <div class="col-md-6">
                                <img id="pic" class="m-auto d-lg-block img"  alt="Thumbnail [200x250]" style="width: 200px; height: 200px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_165ede46b7a%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_165ede46b7a%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                            </div>
                        </div>

                    <form method="POST" action="{{ route('players.store') }}">
                        {{ csrf_field() }}
                        {{method_field('POST')}}
                       <input type="hidden" name="image" id="picurl" value="">

                        <div class="row">
                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control border-input" placeholder="Player Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Position</label>
                                    <input type="text" name="position" class="form-control border-input" placeholder="Player Position">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Squad Number</label>
                                    <input type="number" name="squad_number" class="form-control border-input" placeholder="Squad Number">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control border-input" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-control border-input" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Date of Birth</label>
                                    <input type="date" name="date_of_birth"  class="form-control border-input" >

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Previous Club</label>
                                    <input type="text" name="previous_club"  class="form-control border-input" placeholder="Previous Club">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="url" name="facebook" class="form-control border-input"  placeholder="Facebook Profile URL" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input type="url" name="twitter" class="form-control border-input" placeholder="Twitter Handle Link">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input type="url" name="instagram" class="form-control border-input" placeholder="Instagram Handle Link">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Player</label>
                                    <textarea rows="5" name="about" class="form-control border-input" placeholder="Here can be your description">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Create Profile</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection

@push('scripts')

<script>
   Dropzone.options.filmPicture= {
      paramName: "pic", // The name that will be used to transfer the file
      maxFilesize: 5, // MB
      maxFiles: 1,
      withCredentials: true,
      addRemoveLinks: true,
      dictRemoveFile: 'Remove file',
      dictFileTooBig: 'Image is larger than 5MB',
      timeout: 100000,
      uploadMultiple: false,
      url: "/api/player/image",
      success: function(file, response) {
          $('#pic').attr("src",response)
          $('#picurl').val(response);
          $.notify({
                message: "Uploaded Successfully"
            },{
                type: 'success',
                timer: 1000
          });
      },
      error: function(file, response) {
        $.notify({
            message: "Upload Failed"
        },{
            type: 'error',
            timer: 1000
        });
                
      }
    };
</script>

@endpush