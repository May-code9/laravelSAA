@extends('layouts.master')
@section('content')
<!-- HEADER -->

<header id="t3-header" class="t3-header">
  <div class="t3-header-wrapper">
    <div class="container ">
      <div class="row">
      </div>
    </div>
  </div>
</header>

<!-- //HEADER -->

<!-- BREADCRUMBS -->
<div id="t3-breadcrumbs" class="t3-breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul itemscope class="breadcrumb">
          <li itemprop="itemListElement" itemscope ><a itemprop="item" href="index.php" class="pathway"><span itemprop="name">Home</span></a></li>
          <li itemprop="itemListElement" itemscope class="active"><span itemprop="name">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
            <meta itemprop="position" content="3">
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
        @if(session('success_status'))
          <div class="alert alert-success" role="alert">
            {{ session('success_status') }}
          </div>
          @endif
          @if(session('warning_status'))
          <div class="alert alert-warning" role="alert">
            {{ session('warning_status') }}
          </div>
          @endif
        <div id="system-message-container"></div>
        <div class="page-registration page-registration__">
          <div class="page_header">
            <h2><span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">My</span> <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">Account</span></h2>
          </div>
          <form class="form-horizontal">

            <fieldset>

              <div class="control-group">
                <div class="control-label">
                  <label id="first_name" for="first_name" class="hasPopover required" >User Name:</label>
                </div>
                <div class="controls">
                  <input type="text" name="first_name" value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}" class="required" size="30" disabled/>
                </div>
              </div>
              <div class="control-group">
                <div class="control-label">
                  <label id="phone" for="phone" class="hasPopover" title="Phone" >Phone</label>
                </div>
                <div class="controls">
                  <input type="tel" name="phone" id="phone" value="{{ Auth::user()->phone }}" size="30" disabled/>
                </div>
              </div>
              <div class="control-group">
                <div class="control-label">
                  <label id="email" for="email" class="hasPopover required" title="Email Address" data-content="Enter your email address.">Email Address</label>
                </div>
                <div class="controls">
                  <input type="email" name="email" class="validate-email required" value="{{ Auth::user()->email }}" size="30" disabled/>
                </div>
              </div>
              <div class="controls">
								<a class="btn btn-primary cancel" href="{{ route('trade.user.edit') }}" >Edit Details</a>
							</div>
              <hr>
              <div class="control-group">
                <div class="control-label">
                  <label id="first_name" for="first_name" class="hasPopover required" >Passport:</label>
                </div>
                <div class="controls">
                  @if($countPassport > 0)
                  <img src="{{ asset('passports' . '/' . Auth::user()->passport ) }}" alt="my passport" width="100" height="auto">
                  @else
                  <h4>No Passport uploaded yet</h4>
                  @endif
                </div>
              </div>

              <div class="control-group">
                <div class="control-label">
                  <label id="phone" for="phone" class="hasPopover" title="Preferable Session" >Preferable Session</label>
                </div>
                <div class="controls">
                  @if($countSubscription > 0)
                  <input type="text" name="phone" id="phone" value="{{ $getSubscription->session }} Session(s)" size="30" disabled/>
                  @else
                  <h4>Your registration process is not complete.</h4>
                  @endif
                </div>
              </div>
              <div class="control-group">
                <div class="control-label">
                  <label id="phone" for="phone" class="hasPopover" title="Estimated Start Up Capital" >Estimated Start Up Capital</label>
                </div>
                <div class="controls">
                  @if($countSubscription > 0)
                  <input type="text" name="phone" id="phone" value="${{ $getSubscription->capital }}" size="30" disabled/>
                  @else
                  <h4>Your registration process is not complete.</h4>
                  @endif
                </div>
              </div>
              @if($countSubscription == 0)
              <div class="controls">
								<a class="btn btn-primary cancel" href="{{ route('photo.show') }}" title="Login">Update Form</a>
							</div>
              @endif
              <hr>
              <div class="control-group">
                <div class="control-label">
                  <label id="first_name" for="first_name" class="hasPopover required" >Payment Receipt:</label>
                </div>
                <div class="controls">
                  @if($countPaymentReceipt > 0)
                  <img src="{{ asset('paymentReceipt' . '/' . $getPaymentReceipt->image ) }}" alt="my payment receipt" width="350" height="auto">
                  @else
                  <h4>No Payment Receipt uploaded yet.</h4>
                  @endif
                </div>
              </div>
              @if($countPaymentReceipt == 0)
              <div class="controls">
								<a class="btn btn-primary cancel" href="{{ route('receipt.show') }}" title="Login">Upload Receipt</a>
							</div>
              @endif
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

<div id="fixed-sidebar-right">
</div>
</div>

@endsection
