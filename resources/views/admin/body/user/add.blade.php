@extends('admin.base')
@section('title')
Add | User
@endsection

@section('content')

<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Forms</a></li>
			<li class="breadcrumb-item active" aria-current="page">Add User</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12 stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Users | Add User</h6>
					<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">First Name</label>
									<input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required>
									@error('fisrt_name')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Last Name</label>
									<input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
									@error('last_name')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
						</div><!-- Row -->

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Phone</label>
									<input type="text" class="form-control" autocomplete="off" name="phone" placeholder="Enter Phone Number" required>
									@error('phone')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Email address</label>
									<input type="email" class="form-control" name="email" placeholder="Enter Email Address" required>
									@error('email')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
						</div><!-- Row -->
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Password</label>
									<input type="password" class="form-control" name="password" placeholder="Enter Password not less than 6 letters" required>
									@error('password')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Passport</label>
									<input type="file" class="form-control" name="passport" id="passport" required>
									<br>
									<img id="blah" src="#" alt="" width="140px" height="auto" style="display: none"/>
									@error('passport')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
						</div>
						<input type="submit" class="btn btn-primary submit" value="Submit">
						<a href="{{ route('users.index') }}" class="btn btn-primary submit" style="float: right">Back</a>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
