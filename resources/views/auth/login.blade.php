@extends('layouts.master')
@section('content')

<!-- BREADCRUMBS -->
<div id="t3-breadcrumbs" class="t3-breadcrumbs">

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="index.php" class="pathway"><span itemprop="name">Home</span></a></li>
					<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active"><span itemprop="name">Login form</span>
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
						<h2><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">Login</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">form</span></h2>
					</div>
					<form action="{{ route('login') }}" method="post" id="login-form" novalidate>
						@csrf
						<fieldset class="">
							<div class="control-group">
								<div class="controls">
									<div class="input-prepend">
										<span class="add-on">
											<i class="fa fa-user hasTooltip" title="Email"></i>
										</span>
										<input type="email" name="email" id="email" value="" class="validate-email required @error('email') is-invalid @enderror" size="25" required aria-required="true" autofocus placeholder="Email" autocomplete="email">
										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<div class="input-prepend">
										<span class="add-on">
											<i class="fa fa-lock hasTooltip" title="Password"></i>
										</span>
										<input type="password" name="password" id="password" value="" class="validate-password required @error('password') is-invalid @enderror" size="25" maxlength="99" required aria-required="true" placeholder="Password" autocomplete="current-password">
										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn btn-primary login">Log in</button>
									<a class="btn btn-primary register" href="{{ route('register') }}">Don't have an account?</a>
								</div>
							</div>
							<div class="control-group remember">
								<div class="controls">
									<br>
									<p>
										<input id="remember" type="checkbox" name="remember" class="inputbox" value="yes">
										<label for="remember">Remember me</label>
									</p>
								</div>
							</div>
						</fieldset>
						<a href="#">Forgot your password?</a>
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

<div id="fixed-sidebar-right"></div>

</div>
@endsection
