@extends('admin.base')
@section('title')
QR Codes | List
@endsection
@section('content')
<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Tables</a></li>
			<li class="breadcrumb-item active" aria-current="page">Qr Code Table</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">QR Code table</h6>
					<p class="card-description">Total Number: <code>{{activeUsers()}}</code></p>
					<div class="table-responsive pt-3">

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

						<table class="table table-bordered">
							<thead>
								<tr>
									<th>
										#
									</th>
									<th>
										Name
									</th>
									<th>
										Email
									</th>
									<th>
										Phone
									</th>
									<th>
										Generate QR
									</th>
									<th>
										View QR
									</th>
								</tr>
							</thead>
							<tbody>
								@forelse($getSubscribedUsers as $getUser)
								<tr>
									<td>
										{{ $getUser->id }}
									</td>
									<td>
										{{ $getUser->first_name }} {{ $getUser->last_name }}
									</td>
									<td>
										{{ $getUser->email }}
									</td>
									<td>
										{{ $getUser->phone }}
									</td>
									<td>
										@if(checkQr($getUser->id) == 0)
										<a id="generator_{{$getUser->id}}" href="javascript:;" class="btn btn-warning generator" data-userid="{{ $getUser->id }}" data-id="generator-form{{ $getUser->id }}">Generate</a>
										<form id="generator-form{{ $getUser->id }}" action="{{ url('/generate/qrcode/' . $getUser->id) }}" method="POST" style="display: none;">
												@csrf
												<input type="text" name="user_id" value="{{ $getUser->id }}">
												<input type="text" name="qrcode" value="{{ $getUser->first_name }}_{{ $getUser->last_name }}_{{ $getUser->id }}">
										</form>
										@else
										<button type="button" class="btn btn-secondary" disabled>Done</button>
										@endif
									</td>
									<td>
										@if(checkQr($getUser->id) > 0)
										<a href="/qrcode/userview/{{ $getUser->id }}" class="btn btn-success">View</a>
										@else
										<button type="button" class="btn btn-secondary generator-form{{ $getUser->id }}" disabled>None</button>
										@endif
									</td>
								</tr>
								@empty

								@endforelse
							</tbody>
						</table>
					</div>
					<br>
							{{ $getSubscribedUsers->links() }}

				</div>
			</div>
		</div>
	</div>

</div>
@endsection
