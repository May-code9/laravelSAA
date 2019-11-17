<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class='com_content view-category layout-theme3557category itemid-101 home j39 mm-hover'>

<head>
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1">
  <meta name="HandheldFriendly" content="true"/>
  <meta name="apple-mobile-web-app-capable" content="YES"/>  <base href="/" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  @if(Route::currentRouteName() == 'trade.home')
  @include('partials.header.index')
  @elseif(Route::currentRouteName() == 'trade.about')
  @include('partials.header.about')
  @elseif(Route::currentRouteName() == 'trade.services')
  @include('partials.header.services')
  @elseif(Route::currentRouteName() == 'trade.contact')
  @include('partials.header.contact')
  @elseif(Route::currentRouteName() == 'login')
  @include('partials.header.login')
  @elseif(Route::currentRouteName() == 'register' || Route::currentRouteName() == 'photo.show' || Route::currentRouteName() == 'receipt.show')
  @include('partials.header.register')
  @endif
  <link href="{{ asset('favicon.png') }}" rel="shortcut icon" />
  <style media="screen">
    ul.dropdown-menu li + li::before {
      content: none;
    }
    .alert::before {
      content: none;
    }
  </style>
  <script>
  window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
  ]) !!};

  jQuery(function ($) {
    $(document).ready(function () {
      $('.addActive').css('color', '#948a05');
      var width = $('.mainnav-position').width();
      var upperCount = $('.upper').length;
      var upperWidth = $('.upper').width();
      var downWidth = $('.down').width();
      var mapper = $('#mapper').width();
      var height = mapper * 0.6;
      $('.resetSize').css({'width': mapper + 'px', 'height': height + 'px'});

      var percentage = downWidth - (130 * (upperCount + 1));

      percentage = (percentage/downWidth) * 100;

      $('.percentage').css('marginLeft', percentage + '%');

      if(width < 760) {
        $('.forBigScreen').replaceWith(" ");
        $('.logo').css('marginBottom', '0');
      }
    });
  })
  </script>

</head>

<body class="body__home option-com_content view-category task- itemid-101">
  <div class="page-loader">
    <div>
      <div class="page-loader-body">
        <div class="loader"><span class="block-1"></span><span class="block-2"></span><span class="block-3"></span><span class="block-4"></span><span class="block-5"></span><span class="block-6"></span><span class="block-7"></span><span class="block-8"></span><span class="block-9"></span><span class="block-10"></span><span class="block-11"></span><span class="block-12"></span><span class="block-13"></span><span class="block-14"></span><span class="block-15"></span><span class="block-16"></span></div>
      </div>
    </div>
  </div>
  <div id="color_preloader">
    <div class="loader_wrapper">
      <div class='uil-spin-css'><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div></div>
      <p>Loading color scheme</p>
    </div>
  </div>

  <div class="flex-wrapper">
    <div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

      <div id="header">
        <!-- top -->
        <div id="t3-top" class="t3-top t3-sl t3-sl-top">
          <div class="container ">
            <div class="row">
              <!-- LOGO -->
              <div class="col-sm-6">
                <div class="logo">
                  <div class="logo-text">
                    <a href="" title="EduX" style="margin-top: -15px;">
                      <img src="logo/logo.jpg" alt="logo" class="img-responsive" width="67" height="auto">
                    </a>
                    <small class="site-slogan">Perfect Algorithm  Academy Limited</small>
                  </div>
                </div>
              </div>

              <!-- //LOGO -->

              <div class="moduletable social-menu col-sm-6 forBigScreen">
                <div class="module_container">
                  <ul class="nav menu social-menu">
                    <li class="item-280 divider"><span class="separator ">Follow Us:</span> </li>
                    <li class="item-148"><a href="#" title="Facebook" class="fa fa-facebook"></a></li>
                    <li class="item-150"><a href="#" title="Twitter" class="fa fa-twitter"></a></li>
                    <li class="item-149"><a href="#" title="Google+" class="fa fa-google-plus"></a></li>
                    <li class="item-152"><a href="#" title="Skype" class="fa fa-skype"></a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- //top -->

        <div class="mainnav-position t3-sl-nav ">
          <div class="mainnav-wrapper stuck-container">
            <div class="container ">
              <div class="mainnav-content">
                <div class="row">
                  <div class="col-sm-12">
                    <nav id="t3-mainnav" class="navbar navbar-mainmenu t3-mainnav">
                      <div class="t3-mainnav-wrapper">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
                            <i class="fa fa-bars"></i>
                          </button>
                        </div>

                        <div class="t3-navbar t3-navbar-collapse navbar-collapse collapse">
                          <div  class="t3-megamenu animate fading down"  data-duration="400" data-responsive="true">
                            <ul itemscope class="nav navbar-nav level0 percentage" style="float: none;">
                              <li itemprop='name' class="current mega-align-left upper" data-id="101" data-level="1" data-alignsub="left">
                                <a itemprop='url' class="fullwidth @if(isset($home)) {{ $home }} @endif"  href="{{ route('trade.home') }}"   data-target="#">Home </a>
                              </li>
                              <li itemprop='name'  data-id="584" data-level="1" class="upper">
                                <a itemprop='url' class="@if(isset($about)) {{ $about }} @endif"  href="{{ route('trade.about') }}"   data-target="#">About us </a>
                              </li>
                              <li itemprop='name'  data-id="335" data-level="1" class="upper">
                                <a itemprop='url' class="@if(isset($services)) {{ $services }} @endif"  href="{{ route('trade.services') }}"   data-target="#">Services</a>
                              </li>
                              <li itemprop='name'  data-id="142" data-level="1" class="upper">
                                <a itemprop='url' class="@if(isset($contact)) {{ $contact }} @endif"  href="{{ route('trade.contact') }}"   data-target="#">Contact Us </a>
                              </li>
                              @guest
                              <li itemprop='name'  data-id="331" data-level="1" class="upper">
                                <a href="{{ route('login') }}" class=" @if(isset($login)) {{ $login }} @endif">Sign In</a>
                              </li>
                              <li itemprop='name'  data-id="333" data-level="1" class="upper">
                                <a href="{{ route('register') }}" class=" @if(isset($register)) {{ $register }} @endif">Register</a>
                              </li>
                              @else
                              @if(checkPassport() == null)
                              <li itemprop='name'  data-id="331" data-level="1" class="upper">
                                <a href="{{ route('photo.show') }}" class="">{{ __('Upload Passport') }}</a>
                              </li>
                              @endif
                              @if(checkReceipt() == 0)
                              <li itemprop='name'  data-id="333" data-level="1">
                                <a href="{{ route('receipt.show') }}" class="upper">{{ __('Upload Receipt') }}</a>
                              </li>
                              @endif
                              <li itemprop='name'  data-id="331" data-level="1" class="upper">
                                <a href="javascript:;" class="">{{ Auth::user()->first_name }}</a>
                              </li>
                              @if(checkAdmin() > 0)
                              <li itemprop='name'  data-id="333" data-level="1" class="upper">
                                <a href="{{ route('trade.dashboard') }}" class="">{{ __('Dashboard') }}</a>
                              </li>
                              @endif
                              <li itemprop='name'  data-id="333" data-level="1">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" >{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                                </form>
                              </li>
                              @endguest
                            </ul>
                          </div>
                        </div>
                      </div>
                    </nav>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      @yield('content')

      <!-- FOOTER -->
      <footer id="t3-footer" class="wrap t3-footer">
        <div class="wrap t3-sl t3-sl-footer ">
          <div class="container">
            <div class="row">
              <div class="copyright col-sm-7">
                <span>Copyright</span>
                <span class="copy">&copy;</span>
                <span class="year">2019</span>
                <span class="siteName">{{ config('app.name') }}</span>
                <span class="rights">All rights reserved</span>
              </div>
              <div class="moduletable social-menu  col-sm-5">
                <div class="module_container">
                  <ul class="nav menu social-menu">
                    <li class="item-280 divider">
                      Designed by:
                    </li>
                    <li class="item-148"><a href="https://macode09.com" target="_blank">MA Code09</a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- //FOOTER -->
    </div>

    <div id="back-top">
      <a href="#"><span></span></a>
    </div>

    <div class="container">
      <div id="modal" class="modal fade loginPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <button type="button" class="close modalClose" data-dismiss="modal">×</button>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="moduletable  modal_search ">
              <div class="module_container">
                <div class="search modal_search mod_search195">
                  <form action="index.php" method="post" class="form-inline">
                    <label for="mod-search-searchword195" class="element-invisible">Search ...</label>
                    <input name="searchword" id="mod-search-searchword195" maxlength="200"  class="inputbox search-query input-medium" type="search" size="20" placeholder="Search ..." />
                    <button class="button btn btn-primary" onclick="this.form.searchword.focus();"> </button>
                    <input type="hidden" name="task" value="search" />
                    <input type="hidden" name="option" value="com_search" />
                    <input type="hidden" name="Itemid" value="101" />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>
