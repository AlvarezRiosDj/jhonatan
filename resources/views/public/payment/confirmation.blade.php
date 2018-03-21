@extends('public.layouts.master')

@section('content')
    <!-- PAGE TITLE -->
    <section class="pageTitle" style="background-image:url(assets/public/img/pages/page-title-bg7.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="titleTable">
              <div class="titleTableInner">
                <div class="pageTitleInfo">
                  <h1>Booking Step 3</h1>
                  <div class="under-border"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- WHITE SECTION FILTER-->
    <section class="mainContentSection">
      <div class="container">
        <div class="row progress-wizard" style="border-bottom:0;">

          <div class="col-sm-4 col-xs-12 progress-wizard-step complete">
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="booking-1.html" class="progress-wizard-dot">
              <i class="fa fa-user" aria-hidden="true"></i>
              1. personal info
            </a>
          </div>

          <div class="col-sm-4 col-xs-12 progress-wizard-step complete">
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="booking-2.html" class="progress-wizard-dot">
              <i class="fa fa-usd" aria-hidden="true"></i>
              2. payment info
            </a>
          </div>

          <div class="col-sm-4 col-xs-12 progress-wizard-step active">
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="javascript:void(0)" class="progress-wizard-dot">
              <i class="fa fa-check" aria-hidden="true"></i>
              3. Confirmation
            </a>
          </div>
        </div>
        <div class="row bookingConfirmed">
          <div class="col-xs-12">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">Dismiss</span></button>
              Thank you! Your booking is confirmed. Invoice Sent in your email address
            </div>
          </div>
          <div class="col-xs-12">
            <div class="infoTitle">
              <h2>Booking Details</h2>
            </div>
            <div class="confirmDetilas">
              <img src="assets/public/img/booking/booking-complete.jpg">
              <div class="confirmInfo">
                <div class="infoTitle">
                  <h2>Booking Details</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <div class="row">
                  <div class="col-sm-4 col-xs-12">
                    <dl class="dl-horizontal">
                      <dt><i class="fa fa-calendar" aria-hidden="true"></i> From:</dt>
                      <dd>25 Mar, 2016</dd>
                      <dt><i class="fa fa-calendar" aria-hidden="true"></i> To:</dt>
                      <dd>28 Mar, 2016</dd>
                      <dt><i class="fa fa-user" aria-hidden="true"></i> Guests:</dt>
                      <dd>2 Adults, 1 Child</dd>
                    </dl>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                    <dl class="dl-horizontal">
                      <dt><i class="fa fa-map-marker" aria-hidden="true"></i> Address:</dt>
                      <dd>Abdullah Al Masum <br> Shyamoli, Babor Road, <br> Mohammadpur, Dhaka.</dd>
                    </dl>
                  </div>
                  <div class="col-sm-4 col-xs-12 priceTotal">
                    <h2>Total: <span>$6,500</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection