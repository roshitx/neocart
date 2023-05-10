@extends('role.main')
@section('content.dashboard')
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<h1 class="fw-bold mb-3">ALL USERS</h1>
				<a class="btn btn-success mb-3" href="{{ route('users.create') }}" role="button"><i class="bi bi-person-fill-add"></i>
					Add User</a>
				@if (session('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<i class="bi bi-check-circle-fill"></i> {{ session('success') }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				@endif
				@if ($errors->any())
					<div class="alert alert-danger" role="alert">
						<ul>
							@foreach ($errors->all() as $error)
								<li><i class="bi bi-exclamation-circle-fill"></i> {{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<table class="table-striped table-hover table" id="allUsers">
					<thead>
						<tr class="bg-dark">
							<th scope="col">No</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Gender</th>
							<th scope="col">Role</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<th scope="row">{{ $loop->iteration }}</th>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->gender }}</td>
								<td>{{ $user->role }}</td>
								<td>
									<div class="flex-column flex">
										<a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-warning btn-sm text-white"><i
												class="fa-solid fa-user-pen"></i></a>
										<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST"
											style="display: inline-block;">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
										</form>
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<script>
					$(document).ready(function() {
						$('#allUsers').DataTable();
					});
				</script>
			</div>
		</div>
	</div>

@endsection
