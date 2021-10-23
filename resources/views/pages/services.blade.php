@extends('layouts.master')
@section('content')
<!-- HEADER -->

<header id="t3-header" class="t3-header">
  <div class="t3-header-wrapper">
    <div class="container ">
      <div class="row"></div>
    </div>
  </div>
</header>
<!-- //HEADER -->

<!-- BREADCRUMBS -->
<div id="t3-breadcrumbs" class="t3-breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="index.php" class="pathway"><span itemprop="name">Home</span></a>
          </li>
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
            <span itemprop="name">Our Services</span>
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
        <section class="page-category page-category__history">
          <header class="page_header">
            <h2>
              <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first item_title_part_last">Our Services</span>
            </h2>
          </header>
          <div class="items-row cols-2 row">
            <div class="col-sm-6">
              <article class="item column-1" id="item_35">
                <!--  title/author -->
                <header class="item_header">
                  <h4 class="item_title">
                    <a href="javascript:;">
                      <span class="item_title_part_5 item_title_part_even item_title_part_second_half item_title_part_last">TRAINING</span>
                    </a>
                  </h4>
                </header>
                <!-- Introtext -->
                <div class="item_introtext">
                  <p>Our training service includes purely customized courses to suit clients need; which is, "How to become a successful trader".</p>
                  <p>Over time, we have noticed that, "great passion with ease entry into trading assets in the financial market does not guarantee success" but information and the right action. To this end, we decided to provide insightful training with a deep practical base for our clients in other to help them in their trading career. See our course outline for your perusal.</p>
                </div>
                <!-- info BOTTOM -->
              </article><!-- end item -->
            </div><!-- end spann -->
            <div class="col-sm-6">
              <article class="item column-2" id="item_37">
                <!--  title/author -->
                <header class="item_header">
                  <h4 class="item_title">
                    <a href="javascript:;">
                      <span class="item_title_part_0 item_title_part_odd item_title_part_first_half item_title_part_first">TRADING</span>
                      <span class="item_title_part_1 item_title_part_even item_title_part_second_half item_title_part_last">SIGNAL</span>
                    </a>
                  </h4>
                </header>
                <!-- Introtext -->
                <div class="item_introtext">
                  <p>We do not only create a learning technology at Perfect Algorithm Academy Limited, we ensure the success of our subscribers by reducing their risk of failure. Having navigated the tides of market volatility over time, we have found and back tested what works over and again.</p>
                  <p>Our productized trading signal STTWATS ( Start Trading Today Without A Trading Skill) will enable subscribers start increasing their Trading account with profit on the very first day of trading as we analyse the market for high probability outcomes. We believe that everyone who subscribes to our trading signals automatically stands 80% chance of being in profit daily.</p>
                  <p>
                    We have administratively segmented our trading signals into two sessions on week days (Monday to Friday) from 8:30am WAT to 10:00am WAT and 10:00am WAT to 11:30am WAT. See Terms and Conditions of use for proper guide on how to subscribe and benefit from our signals.
                  </p>
                </div>
                <!-- info BOTTOM -->
              </article><!-- end item -->
            </div><!-- end spann -->
          </div><!-- end row -->
        </section>
      </div>
      <!-- //MAIN CONTENT -->
    </div>
  </div>
</div>
<div id="fixed-sidebar-left">
  <div class="moduletable">
    <div class="module_container"></div>
  </div>
</div>
<div id="fixed-sidebar-right"></div>
</div>
@endsection
