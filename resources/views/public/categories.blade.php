@extends('public.layouts.master')

@section('content')

 <!-- PAGE TITLE -->
    <section class="pageTitle" style="background-image:url(assets/public/img/pages/page-title-bg6.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="titleTable">
              <div class="titleTableInner">
                <div class="pageTitleInfo">
                  <h1>Tour Packages</h1>
                  <div class="under-border"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- PAGE CONTENT -->
    <section class="mainContentSection packagesSection">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <aside>
              <div class="panel panel-default packagesFilter">
                <div class="panel-heading">
                  <h3 class="panel-title">search</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="searchFilter">
                        <select name="guiest_id3" id="guiest_id3" class="select-drop">
                          <option value="0">Destinations</option>
                          <option value="1">USA</option>
                          <option value="2">UK</option>
                          <option value="3">Canada</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-12">
                      <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                        <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                        <div class="input-group-addon">
                          <span class="fa fa-calendar"></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12">
                      <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                        <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                        <div class="input-group-addon">
                          <span class="fa fa-calendar"></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <a href="#" class="btn btn-block buttonTransparent">Search</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default packagesFilter">
                <div class="panel-heading">
                  <h3 class="panel-title">Price</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="searchFilter">
                        <select name="guiest_id4" id="guiest_id4" class="select-drop">
                          <option value="0">$1000 - $2000</option>
                          <option value="1">$1400 - $2000</option>
                          <option value="2">$1600 - $2000</option>
                          <option value="3">$1800 - $2000</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-12 priceRange">
                      <div class="price-slider-inner">
                        <span class="amount-wrapper">
                          Price:
                          <input type="text" id="price-amount-1" readonly>
                          <strong>-</strong>
                          <input type="text" id="price-amount-2" readonly>
                        </span>
                        <div id="price-range"></div>
                      </div>
                      <input class="btn btn-default" type="submit" value="Filter">
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-sm-9  col-xs-12">
            <div class="row sidebarPage">
              <div class="col-xs-12">
                <div class="media packagesList">
                  <a class="media-left fancybox-pop" href="assets/public/img/packages/package-list-01.jpg">
                    <img class="media-object" src="assets/public/img/packages/package-list-01.jpg" alt="Image">
                  </a>
                  <div class="media-body">
                    <div class="bodyLeft">
                      <h4 class="media-heading"><a href="single-package-right-sidebar.html">Suspendisse Tour</a></h4>
                      <div class="countryRating">
                        <span>Asia</span>
                        <ul class="list-inline rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                      <p>Integer purus ex, dictum nec elementum eu, tristique vel lectus. Donec rutrum lectus et pharetra egestas.</p>
                      <ul class="list-inline detailsBtn">
                        <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2016</span></li>
                        <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span></li>
                      </ul>
                    </div>
                    <div class="bodyRight">
                      <div class="bookingDetails">
                        <h2>$499</h2>
                        <p>Per Person</p>
                        <a href="single-package-right-sidebar.html" class="btn buttonTransparent clearfix">Details</a>
                        <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">Inquiry</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media packagesList">
                  <a class="media-left fancybox-pop" href="assets/public/img/packages/package-list-02.jpg">
                    <img class="media-object" src="assets/public/img/packages/package-list-02.jpg" alt="Image">
                  </a>
                  <div class="media-body">
                    <div class="bodyLeft">
                      <h4 class="media-heading"><a href="single-package-right-sidebar.html">maldives tour</a></h4>
                      <div class="countryRating">
                        <span>Asia</span>
                        <ul class="list-inline rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                      <p>Proin convallis magna vel libero accumsan sollicitudin. Quisque dapibus vitae turpis eu magna sagittis.</p>
                      <ul class="list-inline detailsBtn">
                        <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2016</span></li>
                        <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span></li>
                      </ul>
                    </div>
                    <div class="bodyRight">
                      <div class="bookingDetails">
                        <h2>$349</h2>
                        <p>Per Person</p>
                        <a href="single-package-right-sidebar.html" class="btn buttonTransparent clearfix">Details</a>
                        <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">Inquiry</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media packagesList">
                  <a class="media-left fancybox-pop" href="assets/public/img/packages/package-list-03.jpg">
                    <img class="media-object" src="assets/public/img/packages/package-list-03.jpg" alt="Image">
                  </a>
                  <div class="media-body">
                    <div class="bodyLeft">
                      <h4 class="media-heading"><a href="single-package-right-sidebar.html">maldives tour</a></h4>
                      <div class="countryRating">
                        <span>Asia</span>
                        <ul class="list-inline rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                      <p>Vivamus eu mattis nibh. Quisque eget ipsum at odio fringilla consequat vel id erat. Suspendisse non feugiat mi.</p>
                      <ul class="list-inline detailsBtn">
                        <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2016</span></li>
                        <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span></li>
                      </ul>
                    </div>
                    <div class="bodyRight">
                      <div class="bookingDetails">
                        <h2>$599</h2>
                        <p>Per Person</p>
                        <a href="single-package-right-sidebar.html" class="btn buttonTransparent clearfix">Details</a>
                        <a class="btn buttonTransparent" href='booking-1.html'>Book</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media packagesList">
                  <a class="media-left fancybox-pop" href="assets/public/img/packages/package-list-04.jpg">
                    <img class="media-object" src="assets/public/img/packages/package-list-04.jpg" alt="Image">
                  </a>
                  <div class="media-body">
                    <div class="bodyLeft">
                      <h4 class="media-heading"><a href="single-package-right-sidebar.html">maldives tour</a></h4>
                      <div class="countryRating">
                        <span>Asia</span>
                        <ul class="list-inline rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                      <p>Sagittis proin convallis magna vel libero accumsan sollicitudin. Quisque dapibus vitae turpis eu magna.</p>
                      <ul class="list-inline detailsBtn">
                        <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2016</span></li>
                        <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span></li>
                      </ul>
                    </div>
                    <div class="bodyRight">
                      <div class="bookingDetails">
                        <h2>$199</h2>
                        <p>Per Person</p>
                        <a href="single-package-right-sidebar.html" class="btn buttonTransparent clearfix">Details</a>
                        <a class="btn buttonTransparent" href='booking-1.html'>Book</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media packagesList">
                  <a class="media-left fancybox-pop" href="assets/public/img/packages/package-list-05.jpg">
                    <img class="media-object" src="assets/public/img/packages/package-list-05.jpg" alt="Image">
                  </a>
                  <div class="media-body">
                    <div class="bodyLeft">
                      <h4 class="media-heading"><a href="single-package-right-sidebar.html">maldives tour</a></h4>
                      <div class="countryRating">
                        <span>Asia</span>
                        <ul class="list-inline rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                      <p>Suspendisse non feugiat mi. Vivamus eu mattis nibh. Quisque eget ipsum at odio fringilla consequat vel id erat.</p>
                      <ul class="list-inline detailsBtn">
                        <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2016</span></li>
                        <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span></li>
                      </ul>
                    </div>
                    <div class="bodyRight">
                      <div class="bookingDetails">
                        <h2>$999</h2>
                        <p>Per Person</p>
                        <a href="single-package-right-sidebar.html" class="btn buttonTransparent clearfix">Details</a>
                        <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">book</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media packagesList">
                  <a class="media-left fancybox-pop" href="assets/public/img/packages/package-list-06.jpg">
                    <img class="media-object" src="assets/public/img/packages/package-list-06.jpg" alt="Image">
                  </a>
                  <div class="media-body">
                    <div class="bodyLeft">
                      <h4 class="media-heading"><a href="single-package-right-sidebar.html">maldives tour</a></h4>
                      <div class="countryRating">
                        <span>Asia</span>
                        <ul class="list-inline rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                      <p>Donec rutrum lectus et pharetra egestas. Integer purus ex, dictum nec elementum eu, tristique vel lectus.</p>
                      <ul class="list-inline detailsBtn">
                        <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2016</span></li>
                        <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span></li>
                      </ul>
                    </div>
                    <div class="bodyRight">
                      <div class="bookingDetails">
                        <h2>$1199</h2>
                        <p>Per Person</p>
                        <a href="single-package-right-sidebar.html" class="btn buttonTransparent clearfix">Details</a>
                        <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">book</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media packagesList">
                  <a class="media-left fancybox-pop" href="assets/public/img/packages/package-list-07.jpg">
                    <img class="media-object" src="assets/public/img/packages/package-list-07.jpg" alt="Image">
                  </a>
                  <div class="media-body">
                    <div class="bodyLeft">
                      <h4 class="media-heading"><a href="single-package-right-sidebar.html">maldives tour</a></h4>
                      <div class="countryRating">
                        <span>Asia</span>
                        <ul class="list-inline rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul class="list-inline detailsBtn">
                        <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2016</span></li>
                        <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span></li>
                      </ul>
                    </div>
                    <div class="bodyRight">
                      <div class="bookingDetails">
                        <h2>$299</h2>
                        <p>Per Person</p>
                        <a href="single-package-right-sidebar.html" class="btn buttonTransparent clearfix">Details</a>
                        <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">book</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media packagesList">
                  <a class="media-left fancybox-pop" href="assets/public/img/packages/package-list-08.jpg">
                    <img class="media-object" src="assets/public/img/packages/package-list-08.jpg" alt="Image">
                  </a>
                  <div class="media-body">
                    <div class="bodyLeft">
                      <h4 class="media-heading"><a href="single-package-right-sidebar.html">maldives tour</a></h4>
                      <div class="countryRating">
                        <span>Asia</span>
                        <ul class="list-inline rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul class="list-inline detailsBtn">
                        <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2016</span></li>
                        <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span></li>
                      </ul>
                    </div>
                    <div class="bodyRight">
                      <div class="bookingDetails">
                        <h2>$349</h2>
                        <p>Per Person</p>
                        <a href="single-package-right-sidebar.html" class="btn buttonTransparent clearfix">Details</a>
                        <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">book</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media packagesList">
                  <a class="media-left fancybox-pop" href="assets/public/img/packages/package-list-09.jpg">
                    <img class="media-object" src="assets/public/img/packages/package-list-09.jpg" alt="Image">
                  </a>
                  <div class="media-body">
                    <div class="bodyLeft">
                      <h4 class="media-heading"><a href="single-package-right-sidebar.html">maldives tour</a></h4>
                      <div class="countryRating">
                        <span>Asia</span>
                        <ul class="list-inline rating">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul class="list-inline detailsBtn">
                        <li><span class="textInfo"><i class="fa fa-calendar" aria-hidden="true"></i> 27 jan, 2016</span></li>
                        <li><span class="textInfo"><i class="fa fa-clock-o" aria-hidden="true"></i> 5 days</span></li>
                      </ul>
                    </div>
                    <div class="bodyRight">
                      <div class="bookingDetails">
                        <h2>$699</h2>
                        <p>Per Person</p>
                        <a href="single-package-right-sidebar.html" class="btn buttonTransparent clearfix">Details</a>
                        <a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">book</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="paginationCenter">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Previous</span>
                  </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">9</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">Next<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


<!-- INQUIRY MODAL -->
    <div class="modal fade bookingModal modalBook" id="inquiryModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Inquiry About Tour</h4>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" id="yourName" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="yourEmail" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
              </div>
              <button type="submit" class="btn buttonCustomPrimary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    

@endsection