@extends('public.en.layouts.master')

@section('content')

    <!-- PAGE TITLE -->
    <section class="pageTitle" style="background-image:url(assets/public/img/pages/page-title-bg7.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="titleTable">
              <div class="titleTableInner">
                <div class="pageTitleInfo">
                  <h1>Booking Step 1</h1>
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

          <div class="col-sm-4 col-xs-12 progress-wizard-step active">
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="javascript:void(0)" class="progress-wizard-dot">
              <i class="fa fa-user" aria-hidden="true"></i>
              1. personal info
            </a>
          </div>

          <div class="col-sm-4 col-xs-12 progress-wizard-step disabled">
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="booking-2.html" class="progress-wizard-dot">
              <i class="fa fa-usd" aria-hidden="true"></i>
              2. payment info
            </a>
          </div>

          <div class="col-sm-4 col-xs-12 progress-wizard-step disabled">
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="booking-3.html" class="progress-wizard-dot">
              <i class="fa fa-check" aria-hidden="true"></i>
              3. Confirmation
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 col-sm-push-8 col-xs-12">
            <aside>
              <div class="infoTitle">
                <h2>Booking Details</h2>
              </div>
              <div class="bookDetailsInfo">
                <img src="assets/public/img/booking/booking.jpg" alt="image">
                <div class="infoArea">
                  <h3>Maldives Tour</h3>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-calendar" aria-hidden="true"></i>From:  <span>25 Mar, 2016</span></li>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i>To:  <span>28 Mar, 2016</span></li>
                    <li><i class="fa fa-user" aria-hidden="true"></i></i>Guests:  <span>2 Adults, 1 Child</span></li>
                  </ul>
                  <div class="priceTotal">
                    <h2>Total: <span>$6,500</span></h2>
                  </div>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-sm-8 col-sm-pull-4 col-xs-12">
            <div class="infoTitle">
              <h2>personal info</h2>
            </div>
            <div class="bookingForm">
              <form action="" method="POST" role="form" class="form">
                <div class="row">
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">Address 1</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">Address 2</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">City</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">Zip Code</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">State/Region</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">Country</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="form-group col-xs-12">
                    <label for="">Requirements</label>
                    <textarea class="form-control"></textarea>
                  </div>
                  <div class="checkbox col-xs-12">
                    <label>
                      <input type="checkbox"> I have read and accept the <a href="#">terms and conditions</a>
                    </label>
                  </div>
                  <div class="col-xs-12">
                    <div class="buttonArea galleryBtnArea">
                      <ul class="list-inline">
                        <li><a href="#" class="btn buttonTransparent">back</a></li>
                        <li class="pull-right"><a href="booking-2.html" class="btn buttonTransparent">next</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection