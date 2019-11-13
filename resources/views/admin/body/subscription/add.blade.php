@extends('admin.base')
@section('title')
Add | Subscription
@endsection

@section('content')

<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Forms</a></li>
			<li class="breadcrumb-item active" aria-current="page">Add Subscription</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12 stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Subscription | Add Subscription</h6>
					<form action="/add/subscriber/{{ $getUser->id }}" method="POST">
						@csrf

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
									<select id="session" class="form-control @error('session') is-invalid @enderror" name="session" value="{{ old('session') }}" required >
										<option selected disabled>--Select a Preferred Session--</option>
										<option value="first">First Session</option>
										<option value="second">Second Session</option>
										<option value="both">Both</option>
									</select>
									@error('session')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Estimated Start Up Capital</label>
									<input id="capital" type="number" class="form-control @error('capital') is-invalid @enderror" name="capital" placeholder="How much is the start up capital?" required min="1000">
									@error('capital')
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
									<label class="control-label">Number of Months</label>
									<select id="timeline" class="form-control @error('timeline') is-invalid @enderror" name="timeline" required >
										<option selected disabled>--Select number of subscription months--</option>
										<option value="1">1 Month</option>
										<option value="2">2 Months</option>
										<option value="3">3 Months</option>
										<option value="4">4 Months</option>
										<option value="5">5 Months</option>
										<option value="6">6 Months</option>
										<option value="7">7 Months</option>
										<option value="8">8 Months</option>
										<option value="9">9 Months</option>
										<option value="10">10 Months</option>
										<option value="11">11 Months</option>
										<option value="12">12 Months</option>
									</select>
									@error('timeline')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Subscription Month</label>
									<select id="subscription_month" class="form-control @error('subscription_month') is-invalid @enderror" name="subscription_month" value="{{ old('subscription_month') }}" required >
										<option selected disabled>--Select month to start subscription--</option>
										<option value="January">January</option>
										<option value="February">February</option>
										<option value="March">March</option>
										<option value="April">April</option>
										<option value="May">May</option>
										<option value="June">June</option>
										<option value="July">July</option>
										<option value="August">August</option>
										<option value="September">September</option>
										<option value="October">October</option>
										<option value="November">November</option>
										<option value="December">December</option>
									</select>
									@error('subscription_month')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div><!-- Col -->
						</div><!-- Row -->

						<input type="submit" class="btn btn-primary submit" value="Submit">
						<a href="{{ route('unpaid.index') }}" class="btn btn-primary submit" style="float: right">Back</a>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
