@extends('layouts.master') @section('content')
<!-- BREADCRUMBS -->
<div id="t3-breadcrumbs" class="t3-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="index.php" class="pathway"><span itemprop="name">Home</span></a></li>
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active"><span itemprop="name">User registration</span>
						<meta itemprop="position" content="2">
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //BREADCRUMBS -->

</div>

<div id="t3-mainbody" class="t3-mainbody">
	<div class="container">
		<div class="row">
			<!-- MAIN CONTENT -->
			<div id="t3-content" class="t3-content col-sm-12">

            <div class="alert alert-success" role="alert">
              {{ $info }}
            </div>

				<div class="page-registration page-registration__">
					<div class="page_header">
						<h2><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Upload Passport (preferably with equal width and height)</span></h2>
					</div>
					<form action="{{ route('photo.store') }}" method="post" id="member-registration" novalidate class="form-horizontal" enctype="multipart/form-data">
						@csrf
						<fieldset>
							<div class="control-group">
								<div class="control-label">
									<label for="passport" class="hasPopover required" title="passport" data-content="Upload passport.">Passport <span class="star">&#160;*</span></label>
								</div>
								<div class="controls">
									<input type="file" name="passport" id="passport" value="" class="required" size="30" required aria-required="true" />
									<img id="blah" src="#" alt="" width="140px" height="auto" style="display: none"/>
									@error('passport')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
							</div>
							<div class="control-group">
								<div class="control-label">
									<label id="session" for="session" class="hasPopover required" title="session" data-content="Enter your Preferable Session.">Preferable Session<span class="star">&#160;*</span></label>
								</div>
								<div class="controls">
									<select id="session" class="form-control @error('session') is-invalid @enderror" name="session" value="{{ old('session') }}" required >
										<option selected disabled>--Select--</option>
										<option value="First">First Session ($500 per month)</option>
										<option value="Second">Second Session ($500 per month)</option>
										<option value="Both">Both Sessions ($1000 per month)</option>
									</select>
									@error('session')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="control-group">
								<div class="control-label">
									<label id="capital" for="capital" class="hasPopover required" title="capital" data-content="Enter your First name.">Estimated Start Up Capital ($)<span class="star">&#160;*</span></label>
								</div>
								<div class="controls">
									<input type="number" name="capital" id="capital" value="" class="required" size="30" required aria-required="true" min="1000" />
									@error('capital')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
						</fieldset>

						<div class="controls">
							<button type="submit" class="btn btn-primary">Upload</button>
						</div>
					</form>
				</div>
			</div>
			<!-- //MAIN CONTENT -->
		</div>
	</div>
</div>
<div id="fixed-sidebar-left">
	<div class="moduletable  ">
		<div class="module_container">
		</div>
	</div>
</div>

<div id="fixed-sidebar-right">
</div>
</div>
@endsection
