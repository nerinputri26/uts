@extends('private.layouts.app')

@section('content)

   <!--Page Heading-->
<div class="d-sm-flex align-items-center justify-content-between mb=4">
<hi class="h3 mb-0 text-gray-800">Homes</h1>
<a href="{{ route( 'home. create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
<i class="fas fa-plus fa-sm text-white-50"></i> Create Home </a>
</div>

@if ($message = Session:: get('success' ))
<div class="alert alert-success">
 {{ $message }}
</div>
@endif
<!--DataTales Example --> 
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-® font-weight-bold text-primary">Home List</h6>
</div>

<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="g">›
<thead>
<tr>
<th>Title 1</th> 
<th>Title 2</th> 
<th>Title 3</th> 
<th>Button Left</th> 
<th>Button Right</th> 
<th>About Me Title</th>
<th>About Me Description</th> 
<th>Profile Image</th>
<th>Actions</th>
</tr>
</thead>

<tbody>
@if (count($homes) > 0)
@foreach ($homes as $homes)
<tr>
<td>{{ $home->title_1 }}</td>
<td>{{ $home->title 2 }}</td>
<td>{{ $home->title_3 }}</td>
<td>{{ $home->button_left }}</td>
<td>{{ $home->button_right }}</td>
<td>{{ $home->about_me_title }}</td>
<td>{{ $home->about_me_description }}</td>
<td>
<img src="(( asset('storage/' • Shome->image_path) }J" alt="{ Shome-»about me_title )J" width="108"> </td>
<td>
<a href="{{ route('home.edit', $home->id) }}" class="btn-warning btn-sm">Edit</a>
<form action="{{ route( 'home.destroy', $home->id) }}" method="POST" class="₫-inline">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
</td>
</tr>
@endforeach
@else
<tr>
<td colspan="9">No data found</td>
</tr>
@endif 
</tbody>
</table>
</div>
</div>
</div>
@endsection

@push('scripts')
<!-- Page level plugins -->
<script sre="(l asset ('vendor/datatables/jquery-dataTables.min.js') }}"></script>
<script src="{4 asset ('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Page level custom scripts -->
<script src="({ asset ('js/demo/datatables-demo.js') }}"></script>
@endpush