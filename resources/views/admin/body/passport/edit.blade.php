@extends('admin.base')
@section('title')
Edit | User Passport
@endsection

@section('content')

<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Forms</a></li>
			<li class="breadcrumb-item active" aria-current="page">Edit User Passport</li>
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
									<img class="profile-pic" src="{{asset('passports/' . $getUser->passport)}}" alt="No Image Yet, Upload Image and Submit in the form below">
								</a>
								<span class="profile-name">{{ $getUser->first_name }} {{ $getUser->last_name }}</span>
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
					<h6 class="card-title">Users | Edit User Passport</h6>
					<form action="/imageEdit/{{$getUser->id}}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
                  <label class="control-label">Passport</label>
									<input type="file" class="form-control" name="passport" id="passport" required>
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<img id="blah" src="#" alt="" width="140px" height="auto" style="display: none"/>
									@error('passport')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
						</div>
						<button type="submit" class="btn btn-primary submit">Submit</button>
						<a href="{{ route('all.users') }}" class="btn btn-primary submit" style="float: right">Back</a>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
