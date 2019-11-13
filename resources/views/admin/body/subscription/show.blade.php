@extends('admin.base')
@section('title')
View | Subscription
@endsection

@section('content')

<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Forms</a></li>
			<li class="breadcrumb-item active" aria-current="page">View Subscription</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12 stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Subscription | View Subscription</h6>
					<form action="#" method="POST">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<h5>{{ $getUser->first_name }} {{ $getUser->last_name }}</h5>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Preferred Session</label>
									<input type="text" class="form-control" value="{{ $getUser->session }} session" disabled>
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Estimated Start Up Capital</label>
									<input id="capital" type="number" class="form-control" value="{{ $getUser->capital }}" disabled>

								</div>
							</div><!-- Col -->
						</div><!-- Row -->

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label">Number of Months</label>
									<input type="text" class="form-control" value="{{ $getUser->timeline }} Month(s)" disabled>
								</div>
							</div><!-- Col -->
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label">Subscription Month</label>
									<input type="text" class="form-control" value="{{ $getUser->subscription_month }}" disabled>
								</div>
							</div><!-- Col -->
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label">Subscription Cost</label>
									<input type="text" class="form-control" value="{{ $getUser->subscription_cost }}" disabled>
								</div>
							</div><!-- Col -->
						</div><!-- Row -->

						<input type="submit" class="btn btn-primary submit" value="Submit">
						<a href="{{ route('all.subscriber') }}" class="btn btn-primary submit" style="float: right">Back</a>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
