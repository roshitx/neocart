@extends('role.main')
@section('content.dashboard')
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row">
					<h1 class="mb-3">Edit User</h1>
					<div class="col-lg-8">
						<hr>
						<form action="/dashboard/users/{{ $user->id }}" method="POST">
							@method('PUT')
							@csrf
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Email address: <span class="text-danger">*</span></label>
								<input type="email" name="email" value="{{ old('email', $user->email) }}"
									class="form-control @error('email')
                                    is-invalid
                                @enderror"
									placeholder="example@gmail.com" id="email" required autofocus>
								@error('email')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="mb-3">
								<label for="name" class="form-label">Name: <span class="text-danger">*</span></label>
								<input type="text" name="name" value="{{ old('email', $user->name) }}"
									class="form-control @error('email')
                                    is-invalid
                                @enderror"
									placeholder="Username" id="name">
								@error('name')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="mb-3">
								<label for="birth" class="form-label">Birth:</label>
								<input type="date" name="birth" value="{{ old('birth', $user->birth) }}"
									class="form-control @error('birth')
                                    is-invalid
                                @enderror"
									placeholder="Username" id="name">
								@error('birth')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="mb-3">
								<label for="gender" class="form-label">Gender: <span class="text-danger">*</span></label>
								<select class="form-select" name="gender">
									<option value="Male" {{ $user->gender === 'Male' ? 'selected' : '' }}>Male</option>
									<option value="Female" {{ $user->gender === 'Female' ? 'selected' : '' }}>Female</option>
									<option value="Other" {{ $user->gender === 'Other' ? 'selected' : '' }}>Other</option>
								</select>
							</div>
							<div class="mb-4">
								<label for="role" class="form-label">Role: <span class="text-danger">*</span></label>
								<select class="form-select" name="role">
									<option value="Client" {{ $user->role === 'Client' ? 'selected' : '' }}>Client</option>
									<option value="Admin" {{ $user->role === 'Admin' ? 'selected' : '' }}>Admin</option>
									<option value="Seller" {{ $user->role === 'Seller' ? 'selected' : '' }}>Seller</option>
								</select>
							</div>

							<div class="d-flex justify-content-between">
								<a href="{{ route('users.index') }}" class="btn btn-warning">Back</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection
