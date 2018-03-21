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
                  <h1>Booking Step 2</h1>
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

          <div class="col-sm-4 col-xs-12 progress-wizard-step active">
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="javascript:void(0)" class="progress-wizard-dot">
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
              <h2>billing address</h2>
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
                    <div class="bookingDrop">
                      <select name="guiest_id3" id="guiest_id3" class="select-drop">
                        <option value="0">Select Country</option>
                        <option value="1">USA</option>
                        <option value="2">UK</option>
                        <option value="3">Canada</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="infoTitle">
                      <h2>card info</h2>
                    </div>
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">Card Name</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">Card Number</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="">CVV</label>
                    <input type="text" class="form-control" id="">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="" class="blankLabel"></label>
                    <ul class="list-inline">
                      <li><a href="#"><img src="assets/public/img/booking/master-card.jpg" alt="image"></a></li>
                      <li><a href="#"><img src="assets/public/img/booking/discover.jpg" alt="image"></a></li>
                      <li><a href="#"><img src="assets/public/img/booking/visa.jpg" alt="image"></a></li>
                      <li><a href="#"><img src="assets/public/img/booking/paypal.jpg" alt="image"></a></li>
                    </ul>
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="" class="blankLabel">Expiration Date</label>
                    <div class="bookingDrop">
                      <select name="guiest_id3" id="guiest_id3" class="select-drop">
                        <option value="0">Month</option>
                        <option value="1">July</option>
                        <option value="2">August</option>
                        <option value="3">September</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for=""></label>
                    <div class="bookingDrop">
                      <select name="guiest_id3" id="guiest_id3" class="select-drop">
                        <option value="0">Year</option>
                        <option value="1">2016</option>
                        <option value="2">2017</option>
                        <option value="3">2018</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="buttonArea galleryBtnArea">
                      <ul class="list-inline">
                        <li><a href="booking-1.html" class="btn buttonTransparent">back</a></li>
                        <li class="pull-right"><a href="booking-3.html" class="btn buttonTransparent">next</a></li>
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