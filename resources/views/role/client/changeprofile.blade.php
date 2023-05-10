@extends('role.main')
@section('content.dashboard')
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row d-flex justify-content-center">
					<h1 class="fw-bold mb-3 text-center">Your Profile</h1>
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
					<div class="col-sm-12 col-md-10">
						<div class="card">
							<div class="card-header bg-primary">
								Edit Profile
							</div>
							<div class="card-body">
								<h3 class="text-center"><strong>{{ $user->name }}</strong></h3>
								<div class="row">
									<div class="col">
										<form action="{{ route('profile.update') }}" method="POST">
											@csrf
											<input type="hidden" name="id" value="{{ $user->id }}">
											<div class="input-group mb-3">
												<label class="input-group-text" for="username">@</label>
												<input type="text" name="username" value="{{ old('username', $user->username) }}"
													class="form-control @error('username') is-invalid @enderror" placeholder="Username" id="username">
												@error('username')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
												@enderror
											</div>

											<div class="input-group mb-3">
												<label class="input-group-text" for="name">Name</label>
												<input type="text" value="{{ old('name', $user->name) }}"
													class="form-control @error('name') is-invalid @enderror" placeholder="Your name" id="name"
													name="name">
												@error('name')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
												@enderror
											</div>

											<div class="input-group mb-3">
												<label class="input-group-text" for="email">Email</label>
												<input type="text" value="{{ old('email', $user->email) }}"
													class="form-control @error('email') is-invalid @enderror" placeholder="example@gmail.com" id="email"
													name="email">
												@error('email')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
												@enderror
											</div>

											<div class="input-group mb-3">
												<label class="input-group-text" for="no_hp">No</label>
												<input type="text" value="{{ old('no_hp', $user->no_hp) }}"
													class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp"
													placeholder="08 or +62">
												@error('no_hp')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
												@enderror
											</div>

											<div class="mb-3">
												<input type="date" name="birth" value="{{ old('birth', $user->birth) }}"
													class="form-control @error('birth') is-invalid @enderror" id="birth">
												@error('birth')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
												@enderror
											</div>

											<div class="input-group mb-3">
												<label class="input-group-text" for="gender">Gender</label>
												<select class="form-select" id="gender" name="gender">
													<option value="Male" {{ $user->gender === 'Male' ? 'selected' : '' }}>Male</option>
													<option value="Female" {{ $user->gender === 'Female' ? 'selected' : '' }}>Female</option>
													<option value="Other" {{ $user->gender === 'Other' ? 'selected' : '' }}>Other</option>
												</select>
											</div>

											<div class="input-group mb-3">
												<label class="input-group-text" for="bio">Bio</label>
												<input type="text" value="{{ old('bio', $user->bio) }}"
													class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio"
													placeholder="Write your bio here">
												@error('bio')
													<div class="invalid-feedback">
														{{ $message }}
													</div>
												@enderror
											</div>

											<div class="d-flex justify-content-end">
												<button type="submit" class="btn btn-primary">Save</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
