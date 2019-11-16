@extends('admin.base')
@section('title')
Add | Admin
@endsection

@section('content')

<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Forms</a></li>
			<li class="breadcrumb-item active" aria-current="page">Add Admin</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12 stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Admin | Add Admin</h6>
					@if(session('success_status'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>{{ session('success_status') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					@elseif(session('failure_status'))
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>{{ session('failure_status') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					@endif
					<form action="{{ route('admins.add') }}" method="POST">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">User Name</label>
									<select class="form-control" name="user_id" required>
										<option selected disabled>-- Select --</option>
										@forelse($getUsers as $getUser)
										<option value="{{ $getUser->id }}"> {{ $getUser->id }}. {{ $getUser->first_name }} {{ $getUser->last_name }}</option>
										@empty
										<option >Nothing</option>
										@endforelse
									</select>
									@error('user_id')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Role</label>
									<select class="form-control" name="slug" required>
										<option selected disabled>-- Select --</option>
										<option value="4">Super Admin</option>
										<option value="3">Admin</option>
										<option value="2">Secretariat</option>
										<option value="1">Helper</option>
									</select>
									@error('slug')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
						</div><!-- Row -->

						<button type="submit" class="btn btn-primary submit">Submit</button>
						<a href="{{ route('admins.all') }}" class="btn btn-primary submit" style="float: right">Back</a>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
