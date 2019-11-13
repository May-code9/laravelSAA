@extends('admin.base')
@section('title')
Edit | {{ $getUser->first_name }} {{ $getUser->last_name }}
@endsection

@section('content')

<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Forms</a></li>
			<li class="breadcrumb-item active" aria-current="page">{{ $getUser->first_name }} {{ $getUser->last_name }}</li>
		</ol>
	</nav>

	<div class="profile-page tx-13">
		<div class="row">
			<div class="col-12 grid-margin">
				<div class="profile-header" id="passportCover">
					<div class="cover">
						<div class="gray-shade"></div>
						<figure>
							<img src="{{asset('assets/images/profile-cover.jpg')}}" class="img-fluid" alt="profile cover">
						</figure>
						<div class="cover-body d-flex justify-content-between align-items-center">
							<div>
								<a href="#">
									<img class="profile-pic" src="{{asset('passports/' . $getUser->passport)}}" alt="No Image Yet, Click on 'Edit Image' button">
								</a>
								<span class="profile-name">{{ $getUser->first_name }} {{ $getUser->last_name }}</span>
							</div>
							<div class="d-none d-md-block">
								<a class="btn btn-primary btn-icon-text btn-edit-profile" href="/imageEdit/{{$getUser->id}}/edit">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit btn-icon-prepend"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Edit Image
								</a>
							</div>
						</div>
					</div>
					<div class="header-links">

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">All Users | Edit User</h6>
					<form action="/users/{{ $getUser->id }}" method="POST">
						{{ method_field('PUT') }}
            {{ csrf_field() }}
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">First Name</label>
									<input type="text" class="form-control" name="first_name" placeholder="Enter First Name" value="{{ $getUser->first_name }}">
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Last Name</label>
									<input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" value="{{ $getUser->last_name }}">
								</div>
							</div><!-- Col -->
						</div><!-- Row -->

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Phone</label>
									<input type="text" class="form-control" autocomplete="off" name="phone" value="{{ $getUser->phone }}">
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Email address</label>
									<input type="email" class="form-control" name="email" value="{{ $getUser->email }}" disabled>
								</div>
							</div><!-- Col -->
						</div><!-- Row -->
						<input type="submit" class="btn btn-primary submit" value="Submit">
						<a href="{{ route('users.index') }}" class="btn btn-primary submit" style="float: right">Back</a>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
