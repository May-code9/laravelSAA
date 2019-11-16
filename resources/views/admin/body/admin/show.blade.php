@extends('admin.base')
@section('title')
Admin | {{ $getUser->first_name }} {{ $getUser->last_name }}
@endsection

@section('content')

<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Forms</a></li>
			<li class="breadcrumb-item active" aria-current="page">Admin User {{ $getUser->first_name }} {{ $getUser->last_name }}</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12 stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Admin User | View Details</h6>
					<form>

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Admin Name</label>
									<input type="text" class="form-control" value="{{ $getUser->first_name }} {{ $getUser->last_name }}" disabled>
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Role</label>
									<input type="text" class="form-control" value="{{ $getUser->role }}" disabled>
								</div>
							</div><!-- Col -->
						</div><!-- Row -->

					</form>

					<a href="{{ route('admins.all') }}" class="btn btn-primary submit" style="float: right">Back</a>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
