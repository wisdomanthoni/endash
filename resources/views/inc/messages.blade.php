@if(session('success'))
<div class="alert alert-success">
	{{session('success')}}
</div>
@endif

@if(session('delete'))
<div class="alert alert-danger">
	{{session('delete')}}
</div>
@endif