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
    /* border: 2px dashed #0087F7; */
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
                <div class="header">
                    <h4 class="title mb-2">Create Article</h4>
                    <br>
                </div>
                <div class="row">
                    <div class="col-md-4" style="margin-left : 5px;">
                        <form action="/api/upload" class="dropzone mb-3" id="filmPicture" style="width: 200px; height: 200px;">
                        {{ csrf_field() }}
                        </form>
                    </div>
                    <div class="col-md-7">
                        <img id="pic" class="m-auto d-lg-block img img-fluid" style="height: 350px; width: 350px; border:0px" data-holder-rendered="true">
                    </div>
                </div>

                <div class="content">
                    <form>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control border-input" placeholder="Article Title" value="">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Article</label>
                                    <textarea rows="5" title="article" class="form-control border-input" placeholder="Here can be your description">Oh so, your weak rhyme
                                        You doubt I'll bother, reading into it
                                        I'll probably won't, left to my own devices
                                        But that's the difference in our opinions.
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Create Article</button>
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
<script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0wywmrqf585di0lsqsveqzmmw3msaip5ds163itm25e2tvas'></script>
<script>
tinymce.init({
  selector: 'textarea',
  height: 250,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount',
    'codesample'
  ],
  codesample_languages: [
        {text: 'HTML/XML', value: 'markup'},
    ],
  toolbar: 'codesample | insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist | removeformat ',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
</script>
@endpush


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
      url: "/api/article/image",
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