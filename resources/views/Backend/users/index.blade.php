@extends('Backend.master')

@section('content')

<table class="table table-sm table-responsive-sm table-borderless table-hover">
	<thead>
		<a href="#" class="btn btn-sm custom-btn float-left">Create user</a>
		<div class="float-right">
			<input type="text" class="form-control-sm" placeholder="Search" aria-label="" aria-describedby="search-btn">
			<button class="btn btn-sm custom-btn" type="button" id="search-btn"><i class="fas fa-search"></i></button>
		</div>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Email</th>
			<th scope="col">Name</th>
			<th scope="col">Role</th>
			<th scope="col">Update</th>
			<th scope="col">Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<th scope="row">{{ $user->id }}</th>
			<td>{{ $user->email }}</td>
			<td>{{ $user->name }}</td>
			@if($user->is_admin == 1)
				<td>Admin</td>
			@else
				<td>User</td>
			@endif
			<td><a href="#" class="btn btn-sm custom-btn"><i class="fas fa-edit"></i></a></td>
			<td><a href="#" class="btn btn-sm custom-btn"><i class="fas fa-trash-alt"></i></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
<nav aria-label="...">
	<ul class="pagination pagination-sm">
		{{ $users->links() }}
	</ul>
</nav>

@endsection