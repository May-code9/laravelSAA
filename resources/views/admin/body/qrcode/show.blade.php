@extends('admin.base')
@section('title')
QrCode | {{ $getUser->first_name }} {{ $getUser->last_name }}
@endsection

@section('content')

<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Forms</a></li>
			<li class="breadcrumb-item active" aria-current="page">Qr Code for {{ $getUser->first_name }} {{ $getUser->last_name }}</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12 stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Active User | View Details</h6>
					<form>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div style="margin-bottom: 10px">
										<label class="control-label">Qr Code for {{ $getUser->first_name }} {{ $getUser->last_name }}</label>
									</div>
									<div style="border: solid #474747 1px">
										<img src="{{asset('qrcode/' . $getQr->qrcode . '.png')}}" class="img-fluid" alt="user qr code">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<a href="/qrcode/{{ $getQr->qrcode }}.png" class="btn btn-primary submit" style="float: right" download>Download QR Code</a>
								</div>
							</div>
						</div>
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

					<a href="{{ route('qrcode.view') }}" class="btn btn-primary submit" style="float: right">Back</a>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
