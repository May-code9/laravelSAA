<!DOCTYPE html>
<html lang="en-gb" dir="ltr"
class='com_content view-category layout-theme3557category itemid-101 home j39 mm-hover'>

<head>
  <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1"><meta name="HandheldFriendly" content="true"/>
  <meta name="apple-mobile-web-app-capable" content="YES"/>  <base href="/" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  @if(Route::currentRouteName() == 'trade.home')
  @include('partials.header.index')
  @elseif(Route::currentRouteName() == 'trade.about')
  @include('partials.header.about')
  @elseif(Route::currentRouteName() == 'login')
  @include('partials.header.login')
  @elseif(Route::currentRouteName() == 'register' || Route::currentRouteName() == 'photo.show')
  @include('partials.header.register')
  @endif
  <style media="screen">
    ul.dropdown-menu li + li::before {
      content: none;
    }
  </style>
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
                    <a href="" title="EduX">
                      <span><span class="item_title_char0 item_title_char_odd item_title_char_first_half item_title_char_first">E</span><span class="item_title_char1 item_title_char_even item_title_char_first_half">d</span><span class="item_title_char2 item_title_char_odd item_title_char_second_half">u</span><span class="item_title_char3 item_title_char_even item_title_char_second_half item_title_char_last">X</span></span>
                    </a>
                    <small class="site-slogan">Advance Your Career.  Improve Your Life.</small>
                  </div>
                </div>
              </div>
              <!-- //LOGO -->

              <div class="moduletable social-menu  col-sm-6"><div class="module_container"><ul class="nav menu social-menu">
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
              <nav class="moduletable home_menu  col-sm-2">
                <div class="module_container">
                  <div class="icemegamenu">
                    <ul id="icemegamenu">
                      <li id="iceMenu_689" class="iceMenuLiLevel_1 mzr-drop parent fullwidth">
                        <a href="#" class=" iceMenuTitle ">
                          <span class="icemega_title icemega_nosubtitle">Categories</span>
                        </a>
                        <ul class="icesubMenu icemodules sub_level_1" style="width:100%">
                          <li>
                            <div style="float:left;width:25%" class="iceCols">
                              <ul>
                                <li id="iceMenu_690" class="iceMenuLiLevel_2 ">
                                  <div class="icemega_cover_module" style="width:100%">
                                    <div class="icemega_modulewrap " style="width:auto; ">
                                      <div class="mod-menu">
                                        <ul class="menu ">
                                          <li class="item-694">
                                            <a href="arts-humanities.php" >Arts &amp; Humanities</a>
                                          </li>
                                          <li class="item-695">
                                            <a href="arts-humanities.php" >Building &amp; Planning</a>
                                          </li>
                                          <li class="item-696">
                                            <a href="arts-humanities.php" >Business &amp; Management</a>
                                          </li>
                                          <li class="item-697">
                                            <a href="arts-humanities.php" >Computing &amp; IT</a>
                                          </li>
                                          <li class="item-698">
                                            <a href="arts-humanities.php" >Design</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div style="float:left;width: 25%" class="iceCols">
                              <ul>
                                <li id="iceMenu_691" class="iceMenuLiLevel_2 ">
                                  <div class="icemega_cover_module" style="width:100%">
                                    <div class="icemega_modulewrap " style="width:auto; ">
                                      <div class="mod-menu">
                                        <ul class="menu ">
                                          <li class="item-709">
                                            <a href="arts-humanities.php" >Education, Childhood &amp; Youth</a>
                                          </li>
                                          <li class="item-710">
                                            <a href="arts-humanities.php" >Engineering</a>
                                          </li>
                                          <li class="item-711">
                                            <a href="arts-humanities.php" >Environment &amp; Development</a>
                                          </li>
                                          <li class="item-712">
                                            <a href="arts-humanities.php" >Health &amp; Social Care</a>
                                          </li>
                                          <li class="item-713">
                                            <a href="arts-humanities.php" >Languages</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div style="float:left;width: 25%" class="iceCols">
                              <ul>
                                <li id="iceMenu_692" class="iceMenuLiLevel_2 ">
                                  <div class="icemega_cover_module" style="width:100%">
                                    <div class="icemega_modulewrap " style="width:auto; ">
                                      <div class="mod-menu">
                                        <ul class="menu ">
                                          <li class="item-704">
                                            <a href="index.php/law" >Law</a>
                                          </li>
                                          <li class="item-705">
                                            <a href="index.php/mathematics-statistics" >Mathematics &amp; Statistics</a>
                                          </li>
                                          <li class="item-706">
                                            <a href="index.php/medical-sciences" >Medical Sciences</a>
                                          </li>
                                          <li class="item-707">
                                            <a href="index.php/nursing-healthcare-practice2" >Nursing &amp; Healthcare Practice</a>
                                          </li>
                                          <li class="item-708">
                                            <a href="index.php/psychology-counselling2" >Psychology &amp; Counselling</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div style="float:left;width: 25%" class="iceCols">
                              <ul>
                                <li id="iceMenu_693" class="iceMenuLiLevel_2 ">
                                  <div class="icemega_cover_module" style="width:100%">
                                    <div class="icemega_modulewrap " style="width:auto; ">
                                      <div class="mod-menu">
                                        <ul class="menu ">
                                          <li class="item-699">
                                            <a href="index.php/nursing-healthcare-practice" >Nursing &amp; Healthcare Practice</a>
                                          </li>
                                          <li class="item-700">
                                            <a href="index.php/psychology-counselling" >Psychology &amp; Counselling</a>
                                          </li>
                                          <li class="item-701">
                                            <a href="index.php/science" >Science</a>
                                          </li>
                                          <li class="item-702">
                                            <a href="index.php/social-sciences" >Social Sciences</a>
                                          </li>
                                          <li class="item-703">
                                            <a href="index.php/technology" >Technology</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

              <div class="col-sm-7">
                <nav id="t3-mainnav" class="navbar navbar-mainmenu t3-mainnav">
                  <div class="t3-mainnav-wrapper">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
                        <i class="fa fa-bars"></i>
                      </button>
                    </div>

                    <div class="t3-navbar t3-navbar-collapse navbar-collapse collapse">
                      <div  class="t3-megamenu animate fading"  data-duration="400" data-responsive="true">
                        <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="nav navbar-nav level0">
                          <li itemprop='name' class="current active mega-align-left" data-id="101" data-level="1" data-alignsub="left">
                            <a itemprop='url' class="fullwidth"  href="{{ route('trade.home') }}"   data-target="#">Home </a>
                          </li>
                          <li itemprop='name'  data-id="584" data-level="1">
                            <a itemprop='url' class=""  href="{{ route('trade.about') }}"   data-target="#">About us </a>
                          </li>
                          <li itemprop='name' class="dropdown mega" data-id="335" data-level="1">
                            <span class=" dropdown-toggle separator"   data-target="#" data-toggle="dropdown"> Pages<em class="caret"></em></span>
                            <div class="nav-child dropdown-menu mega-dropdown-menu"  >
                              <div class="mega-dropdown-inner">
                                <div class="row">
                                  <div class="col-xs-12 mega-col-nav" data-width="12">
                                    <div class="mega-inner">
                                      <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level1">
                                        <li itemprop='name'  data-id="138" data-level="2">
                                          <a itemprop='url' class=""  href="faqs.php"   data-target="#">FAQs </a>
                                        </li>
                                        <li itemprop='name'  data-id="136" data-level="2">
                                          <a itemprop='url' class=""  href="our-team.php"   data-target="#">Our team </a>
                                        </li>
                                        <li itemprop='name'  data-id="135" data-level="2">
                                          <a itemprop='url' class=""  href="history.php"   data-target="#">History </a>
                                        </li>
                                        <li itemprop='name'  data-id="137" data-level="2">
                                          <a itemprop='url' class=""  href="testimonials.php"   data-target="#">Testimonials </a>
                                        </li>
                                        <li itemprop='name'  data-id="305" data-level="2">
                                          <a itemprop='url' class=""  href="site-map.php"   data-target="#">Site map </a>
                                        </li>
                                        <li itemprop='name'  data-id="342" data-level="2">
                                          <a itemprop='url' class=""  href="forum.php"   data-target="#">Forum</a>
                                        </li>
                                        <li itemprop='name'  data-id="343" data-level="2">
                                          <a itemprop='url' class=""  href="careers.php"   data-target="#">Careers </a>
                                        </li>
                                        <li itemprop='name'  data-id="283" data-level="2">
                                          <a itemprop='url' class=""  href="portfolio.php"   data-target="#">Portfolio </a>
                                        </li>
                                        <li itemprop='name' class="dropdown-submenu mega" data-id="426" data-level="2">
                                          <a itemprop='url' class=""  href="elements.php"   data-target="#">Elements </a>
                                          <div class="nav-child dropdown-menu mega-dropdown-menu"  >
                                            <div class="mega-dropdown-inner">
                                              <div class="row">
                                                <div class="col-xs-12 mega-col-nav" data-width="12">
                                                  <div class="mega-inner">
                                                    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="mega-nav level2">
                                                      <li itemprop='name'  data-id="336" data-level="3">
                                                        <a itemprop='url' class=""  href="pricing.php"   data-target="#">Pricing </a>
                                                      </li>
                                                      <li itemprop='name'  data-id="171" data-level="3">
                                                        <a itemprop='url' class=""  href="template-settings.php"   data-target="#">Template settings</a>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </li>
                                        <li itemprop='name'  data-id="738" data-level="2">
                                          <a itemprop='url' class=""  href="event.php"   data-target="#">Event </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li itemprop='name'  data-id="611" data-level="1">
                            <a itemprop='url' class=""  href="blog.php"   data-target="#">Blog </a>
                          </li>
                          <li itemprop='name'  data-id="203" data-level="1">
                            <a itemprop='url' class="gallery"  href="gallery.php"   data-target="#">Gallery </a>
                          </li>
                          <li itemprop='name'  data-id="142" data-level="1">
                            <a itemprop='url' class=""  href="contact-us.php"   data-target="#">Contact Us </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </nav>
              </div>
              <div class="moduletable   col-sm-3">
                <div class="module_container">
                  <div class="mod-menu">
                    <ul class="menu user-menu">
                      @guest
                      <li class="item-331">
                        <a href="{{ route('login') }}" >Sign In</a>
                      </li>
                      <li class="item-333">
                        <a href="{{ route('register') }}" >Register</a>
                      </li>
                      @else
                      <li class="nav-item dropdown item-331">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->first_name }} <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(checkAdmin() > 0)
                            <li itemprop='name'  data-id="331" style="display: inline;">
                              <a class="dropdown-item" href="{{ route('trade.dashboard') }}" >
                                  {{ __('Dashboard') }}
                              </a>
                            </li>
                            @endif
                            @if(checkPassport() == null)
                            <li itemprop='name'  data-id="331" style="display: inline;">
                              <a class="dropdown-item" href="{{ route('photo.show') }}" >
                                  {{ __('Upload Passport') }}
                              </a>
                            </li>
                            @endif
                            <li itemprop='name'  data-id="333" style="display: inline;">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                              </form>
                            </li>
                          </ul>
                      </li>
                      @endguest
                    </ul>
                  </div>
                </div>
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
              <span class="siteName">EduX</span>
              <span class="rights">All rights reserved</span>
            </div>
            <div class="moduletable social-menu  col-sm-5">
              <div class="module_container">
                <ul class="nav menu social-menu">
                  <li class="item-280 divider">
                    <span class="separator ">Follow Us:</span>
                  </li>
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
