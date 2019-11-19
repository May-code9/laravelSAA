@extends('layouts.master')

@section('content')
<!-- BREADCRUMBS -->
<div id="t3-breadcrumbs" class="t3-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
					<li itemprop="itemListElement" itemscope><a itemprop="item" href="/" class="pathway"><span itemprop="name">Home</span></a></li>
					<li itemprop="itemListElement" itemscope class="active"><span itemprop="name">Reset Password</span>
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
				<div id="system-message-container">
				</div>
				<div class="page-login page-login__">
					<div class="page_header">
						<h2><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Reset Password</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">form</span></h2>
					</div>
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
          <form action="{{ route('password.email') }}" method="post" id="login-form" novalidate>
						@csrf
            <fieldset class="">
							<div class="control-group">
                <div class="control-label">
                  <label id="email" for="email" class="hasPopover required" title="Email Address" data-content="Enter your email address.">Email Address<span class="star">&#160;*</span></label>
                </div>
								<div class="controls">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
									<div class="input-prepend">
										<span class="add-on">
											<i class="fa fa-user hasTooltip" title="Email"></i>
										</span>
										<input type="email" name="email" id="email" value="" class="form-control @error('email') is-invalid @enderror" size="25" aria-required="true" autofocus placeholder="Email" autocomplete="email" required>
									</div>
								</div>
							</div>
              <div class="control-group">
								<div class="controls">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Send Password Reset Link') }}
                  </button>
								</div>
							</div>

            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="fixed-sidebar-left">
	<div class="moduletable  ">
		<div class="module_container">
		</div>
	</div>
</div>

<div id="fixed-sidebar-right"></div>

</div>
@endsection
