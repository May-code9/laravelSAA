@extends('admin.base')
@section('title')
View | {{ $getUser->first_name }} {{ $getUser->last_name }}
@endsection

@section('content')

<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Forms</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{ $getUser->first_name }} {{ $getUser->last_name }}</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12 stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">InActive User | View Details</h6>
					<form>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">First Name</label>
									<input type="text" class="form-control" placeholder="Enter first name" value="{{ $getUser->first_name }}" disabled>
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Last Name</label>
									<input type="text" class="form-control" placeholder="Enter last name" value="{{ $getUser->last_name }}" disabled>
								</div>
							</div><!-- Col -->
						</div><!-- Row -->

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Phone</label>
									<input type="text" class="form-control" autocomplete="off" value="{{ $getUser->phone }}" disabled>
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Email address</label>
									<input type="email" class="form-control" value="{{ $getUser->email }}" disabled>
								</div>
							</div><!-- Col -->
						</div><!-- Row -->
					</form>

					<a href="{{ route('users.index') }}" class="btn btn-primary submit" style="float: right">Back</a>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
