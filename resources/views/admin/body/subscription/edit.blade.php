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

	<div class="row">
		<div class="col-md-12 stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">All Users | Edit User</h6>
					<form action="/edit/subscriber/{{ $getUser->id }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div style="margin-bottom: 10px">
										<label class="control-label">Payment Receipt</label>

									</div>
									<img src="{{asset('paymentReceipt/' . $getPaymentReceipt->image)}}" class="img-fluid" alt="Payment Receipt">
								</div>
							</div>
						</div>

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
									<select id="session" class="form-control @error('session') is-invalid @enderror" name="session" required >
										<option selected value="{{ $getUser->session }}">{{ $getUser->session }} Session(s)</option>
										<option disabled>--Select a Preferred Session--</option>
										<option value="First">First Session</option>
										<option value="Second">Second Session</option>
										<option value="Both">Both Sessions</option>
									</select>
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Estimated Start Up Capital</label>
									<input name="capital" type="number" class="form-control" value="{{ $getUser->capital }}" min="1000" placeholder="How much is the start up capital?" required>
								</div>
							</div><!-- Col -->
						</div><!-- Row -->

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label">Number of Months</label>
									<select id="timeline" class="form-control @error('timeline') is-invalid @enderror" name="timeline" required >
										<option selected value="{{ $getUser->timeline }}">{{ $getUser->timeline }} Month(s)</option>
										<option disabled>--Select number of subscription months--</option>
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
								</div>
							</div><!-- Col -->
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label">Subscription Month</label>
									<select id="start_month" class="form-control @error('start_month') is-invalid @enderror" name="start_month" required >
										<option selected value="{{ $getUser->start_month }}">{{ $getUser->start_month }}</option>
										<option disabled>--Select month to start subscription--</option>
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
								</div>
							</div><!-- Col -->
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label">Payment Receipt</label>
									<input type="file" class="form-control" name="image" id="passport">
									<br>
									<img id="blah" src="#" alt="" width="140px" height="auto" style="display: none"/>
									@error('image')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
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
