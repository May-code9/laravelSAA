@extends('layouts.master')
@section('content')
<!-- BREADCRUMBS -->
<div id="t3-breadcrumbs" class="t3-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
					<li itemprop="itemListElement" itemscope ><a itemprop="item" href="index.php" class="pathway"><span itemprop="name">Home</span></a></li>
					<li itemprop="itemListElement" itemscope  class="active"><span itemprop="name">My Account</span>
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
				<div id="system-message-container"></div>
				<div class="page-registration page-registration__">
					<div class="page_header">
						<h2><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">My</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">Account</span></h2>
					</div>
					<form id="member-registration" action="{{ route('trade.user.edit') }}" method="post" class="form-horizontal">
						@csrf
						<fieldset>
							<div class="control-group">
								<div class="control-label">
									<span class="spacer"><span class="before"></span><span class="text">
										<label id="jform_spacer-lbl" class=""><strong class="red">*</strong> All fields Required</label></span><span class="after"></span></span>
									</div>
									<div class="controls"></div>
								</div>

								<div class="control-group">
									<div class="control-label">
										<label id="first_name" for="first_name" class="hasPopover required" title="first_name" data-content="Enter your First name.">First Name<span class="star">&#160;*</span></label>
									</div>
									<div class="controls">
										<input type="text" name="first_name" id="first_name" class="required" size="30" required aria-required="true" value="{{ Auth::user()->first_name }}"/>
										@error('first_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="control-group">
									<div class="control-label">
										<label id="last_name" for="last_name" class="hasPopover required" title="last_name" data-content="Enter your Last name.">Last Name<span class="star">&#160;*</span></label>
									</div>
									<div class="controls">
										<input type="text" name="last_name" id="last_name" class="validate-username required" size="30" required aria-required="true" value="{{ Auth::user()->last_name }}"/>
										@error('last_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="control-group">
									<div class="control-label">
										<label id="phone" for="phone" class="hasPopover" title="Phone" data-content="Enter your phone number.">Phone<span class="star">&#160;*</span></label>
									</div>
									<div class="controls">
										<input type="tel" name="phone" id="phone" size="30" required aria-required="true" value="{{ Auth::user()->phone }}"/>
										@error('phone')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="control-group">
									<div class="control-label">
										<label id="email" for="email" class="hasPopover required" title="Email Address" data-content="Enter your email address.">Email Address<span class="star">&#160;*</span></label>
									</div>
									<div class="controls">
										<input type="email" class="validate-email required" id="email" size="30" autocomplete="email" required aria-required="true" value="{{ Auth::user()->email }}" disabled/>
										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
							</fieldset>

							<div class="controls">
								<button type="submit" class="btn btn-primary" id="regButton">Update</button>

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
