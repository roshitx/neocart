@extends('role.main')
@section('content.dashboard')
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row">
					<h1 class="mb-3">Add User</h1>
					<div class="col-lg-8">
						<hr>
						<form action="{{ route('users.store') }}" method="POST">
							@csrf
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Email address: <span class="text-danger">*</span></label>
								<input type="email" name="email"
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
								<input type="text" name="name"
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
								<label for="password" class="form-label">Password: <span class="text-danger">*</span></label>
								<input type="password" name="password"
									class="form-control @error('password')
                                    is-invalid
                                @enderror"
									placeholder="Make a strong password" id="password">
								@error('password')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="mb-3">
								<label for="birth" class="form-label">Birth:</label>
								<input type="date" name="birth"
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
									<option value="Male" {{ old('gender') === 'Male' ? 'selected' : '' }}>Male</option>
									<option value="Female" {{ old('gender') === 'Female' ? 'selected' : '' }}>Female</option>
									<option value="Other" {{ old('gender') === 'Other' ? 'selected' : '' }}>Other</option>
								</select>
							</div>
							<div class="mb-4">
								<label for="role" class="form-label">Role: <span class="text-danger">*</span></label>
								<select class="form-select" name="role">
									<option value="Client" {{ old('role') === 'Client' ? 'selected' : '' }}>Client</option>
									<option value="Admin" {{ old('role') === 'Admin' ? 'selected' : '' }}>Admin</option>
									<option value="Seller" {{ old('role') === 'Seller' ? 'selected' : '' }}>Seller</option>
								</select>
							</div>
							

							<div class="d-flex justify-content-between">
								<a href="{{ route('users.index') }}" class="btn btn-warning">Back</a>
								<button type="submit" class="btn btn-primary">Add</button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection
