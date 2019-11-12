@extends('admin.base')
@section('title')
InActive Users | List
@endsection
@section('content')
<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Tables</a></li>
			<li class="breadcrumb-item active" aria-current="page">InActive Users Table</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">InActive Users table</h6>
					<p class="card-description">Total Number: <code>----</code></p>
					<div class="table-responsive pt-3">
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
								@forelse($inactiveUsers as $getUser)
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
										<a href="/unsubcribed/{{ $getUser->id }}/edit" class="btn btn-warning btn-xs"><i class="link-icon" data-feather="edit"></i></a>
										<a href="/unsubcribed/{{ $getUser->id }}" class="btn btn-success btn-xs"><i class="link-icon" data-feather="eye"></i></a>
									</td>
								</tr>
								@empty

								@endforelse
							</tbody>
						</table>
					</div>
					<br>
							{{ $inactiveUsers->links() }}

				</div>
			</div>
		</div>
	</div>

</div>
@endsection
