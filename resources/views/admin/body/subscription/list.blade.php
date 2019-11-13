@extends('admin.base')
@section('title')
Users | List
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
					<h6 class="card-title">All Users table</h6>
					<p class="card-description">Total Number: <code>{{allUsers()}}</code></p>
					<div class="table-responsive pt-3">
						@if(session('success_status'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>{{ session('success_status') }}</strong>
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
										Registration date
									</th>
									<th>

									</th>
								</tr>
							</thead>
							<tbody>
								@forelse($getUsers as $getUser)
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
										{{ $getUser->created_at }}
									</td>
									<td>
										<a href="/users/{{ $getUser->id }}/edit" class="btn btn-warning btn-xs"><i class="link-icon" data-feather="edit"></i></a>
										<a href="/users/{{ $getUser->id }}" class="btn btn-success btn-xs"><i class="link-icon" data-feather="eye"></i></a>
									</td>
								</tr>
								@empty

								@endforelse
							</tbody>
						</table>
					</div>
					<br>
							{{ $getUsers->links() }}

				</div>
			</div>
		</div>
	</div>

</div>
@endsection
