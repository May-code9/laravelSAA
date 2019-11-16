@extends('admin.base')
@section('title')
Admin | List
@endsection
@section('content')
<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Tables</a></li>
			<li class="breadcrumb-item active" aria-current="page">All Users Table</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">All Admins table</h6>
					<p class="card-description">Total Number: <code>----</code></p>
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
										Phone
									</th>
									<th>
										Role
									</th>
									<th>
										Registration date
									</th>
									<th>

									</th>
								</tr>
							</thead>
							<tbody>
								@forelse($getAdmins as $getUser)
								<tr>
									<td>
										{{ $getUser->id }}
									</td>
									<td>
										{{ $getUser->first_name }} {{ $getUser->last_name }}
									</td>
									<td>
										{{ $getUser->phone }}
									</td>
									<td>
										{{ $getUser->role }}
									</td>
									<td>
										{{ $getUser->created_at }}
									</td>
									<td>
										@if($getUser->slug == 4)
										<button type="button" class="btn btn-secondary btn-xs" disabled><i class="link-icon" data-feather="edit"></i></button>
										@else
										<a href="/edit/admin/{{ $getUser->id }}" class="btn btn-warning btn-xs"><i class="link-icon" data-feather="edit"></i></a>
										@endif
										<a href="/admins/{{ $getUser->id }}" class="btn btn-success btn-xs"><i class="link-icon" data-feather="eye"></i></a>
									</td>
								</tr>
								@empty

								@endforelse
							</tbody>
						</table>
					</div>
					<br>

				</div>
			</div>
		</div>
	</div>

</div>
@endsection
