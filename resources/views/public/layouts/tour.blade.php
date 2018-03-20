<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LuxuryExpeditions | Tour Machupicchu</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('assets/front/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/front/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/front/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/plugins/selectbox/select_option1.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/plugins/datepicker/datepicker.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/plugins/isotope/jquery.fancybox.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/plugins/isotope/isotope.css') }}">
  <!-- REVOLUTION SLIDER -->
	<link rel="stylesheet" href="{{ asset('assets/front/plugins/revolution/css/settings.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/plugins/revolution/css/layers.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front/plugins/revolution/css/navigation.css') }}">


  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/front/css/colors/default.css') }}" id="option_color">

  <!-- FAVICON -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/front/img/favicon.png') }}"/>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>


<body class="body-wrapper ">
  <div class="main-wrapper">

    <!-- HEADER -->
    <header>
      <nav class="navbar navbar-default navbar-main navbar-fixed-top   lightHeader " role="navigation">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown singleDrop active">
                <a href="{{ url('/') }}">Home </a>
              </li>
              <li class="dropdown singleDrop">
                <a href="">About </a>
              </li>
              <li class="dropdown megaDropMenu ">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">Tours</a>
                <ul class="row dropdown-menu">
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Tour Packages in Perú</li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Tour Packages in Argentina</li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Tour Packages in Bolivia</li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3 col-xs-12">
                    <ul class="list-unstyled">
                      <li>Tour Packages in Ecuador</li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                      <li class=""><a href="">Packages Cusco-Lima</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="">Gallery </a>
              </li>
              <li class="dropdown singleDrop">
                <a href="">Contact </a>
              </li>
              <li class="dropdown searchBox">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="searchIcon"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <span class="input-group">
                      <input type="text" class="form-control" placeholder="Search..." aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2">Search</span>
                    </span>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header>


    <!-- PAGE TITLE -->
    <section class="pageTitle" style="background-image:url({{ asset('assets/front/img/pages/page-title-bg13.jpg') }});">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="titleTable">
              <div class="titleTableInner">
                <div class="pageTitleInfo">
                  <h1>Machupicchu Tour</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PAGE CONTENT -->
    <section class="mainContentSection singlePackage">
      <div class="container">
        <div class="row ">
          <div class="col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-xs-12">
                <div id="package-carousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#package-carousel" data-slide-to="0" class=""></li>
                    <li data-target="#package-carousel" data-slide-to="1" class=""></li>
                    <li data-target="#package-carousel" data-slide-to="2" class="active"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active">
                      <img alt="Second slide" src="{{ asset('assets/front/img/packages/package-slider-03.jpg') }}">
                    </div>
                    <div class="item ">
                      <img alt="Third slide" src="{{ asset('assets/front/img/packages/package-slider-04.jpg') }}">
                    </div>
                    <div class="item ">
                      <img alt="Third slide" src="{{ asset('assets/front/img/packages/package-slider-05.jpg') }}">
                    </div>
                  </div>
                  <a class="left carousel-control" href="#package-carousel" data-slide="prev"><span class="glyphicon glyphicon-menu-left"></span></a>
                  <a class="right carousel-control" href="#package-carousel" data-slide="next"><span class="glyphicon glyphicon-menu-right"></span></a>
                </div>
              </div>
              <div class="col-xs-12">
                <div class="description-aria">
                  <div class="sectionTitle2">
                    <h2>description</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip  commodo consequat. Duis aute irure dolor in reprehenderit</p>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <ul class="descriptionList">
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Cras tincidunt mi a sodales pulvinar.</li>
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Mauris in libero sodales ultrices purus</li>
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Quisque vulputate enim eu fringilla.</li>
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Eleifend mi vel nisl lobortis nec tincidunt</li>
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Mauris in libero sodales ultrices purus</li>
                      </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <ul class="descriptionList">
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Praesent nec nisl iaculis, pulvinar nunc.</li>
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Sed at erat lacinia, condimentum eros non</li>
                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Mauris in libero sodales ultrices purus at</li>
                      </ul>
                    </div>
                  </div>
                  <div class="information-aria">
                    <h3>Program</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <div class="singleContent">
                      <div class="media">
                        <div class="media-body">
                          <h4 class="media-heading">Nunc ultricies dui</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="media-right">
                          <div class="days">day 1</div>
                        </div>
                      </div>
                    </div>
                    <div class="singleContent">
                      <div class="media">
                        <div class="media-body">
                          <h4 class="media-heading">Nunc ultricies dui</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="media-right">
                          <div class="days">day 2</div>
                        </div>
                      </div>
                    </div>
                    <div class="singleContent">
                      <div class="media">
                        <div class="media-body">
                          <h4 class="media-heading">Nunc ultricies dui</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="media-right">
                          <div class="days">day 3</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="location-aria">
                  <div class="sectionTitle2">
                    <h2>Location</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                  </div>
                  <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12097.002861286059!2d-74.01154310416635!3d40.71249695811257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1502716241862" width="100%" height="400px" scrolling="no" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="review-aria">
                  <div class="sectionTitle2">
                    <h2>Reviews</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                  </div>
                  <div class="reviewContent">
                    <h3 class="reviewTitle">
                      Reviews (3)
                        <span>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                    </h3>

                    <div class="reviewMedia">
                      <ul class="media-list">
                        <li class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="{{ asset('assets/front/img/blog/comments-02.jpg') }}" alt="Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="media-heading">Jessica Brown</h5>
                            <span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                            </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan totam rem ape riam</p>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="{{ asset('assets/front/img/blog/comments-01.jpg') }}" alt="Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="media-heading">Jessica Brown</h5>
                            <span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                            </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan totam rem ape riam</p>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="{{ asset('assets/front/img/blog/comments-03.jpg') }}" alt="Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h5 class="media-heading">Jessica Brown</h5>
                            <span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                              <i class="fa fa-star-0" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                            </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan totam rem ape riam</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <form action="" method="POST" role="form" class="commentsForm">
                      <h3 class="reviewTitle">Leave your review</h3>
                      <p>Want to Rate it? <span>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-0" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                      </span></p>
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn buttonCustomPrimary">Comment</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <aside class="col-sm-4 col-xs-12">
            <div class="singleCartSidebar">
              <div class="panel panel-default">
                <div class="panel-heading">Booking</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-12">
                      <form class="form-horizontal">
                        <div class="form-group">
                          <label class="control-label col-md-5 col-sm-12 col-xs-5" for="inputSuccess3">Select a date:</label>
                          <div class="col-md-7 col-sm-12 col-xs-7 datepickerWrap">
                            <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                              <input type="text" class="form-control" placeholder="MM/DD/YYYY">
                              <div class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-5 col-sm-12 col-xs-5" for="inputSuccess3">Select a time slot:</label>
                          <div class="col-md-7 col-sm-12 col-xs-7">
                            <div class="input-group">
                              <div class="selectbox-sidebar">
                                <select name="guiest_id2" id="guiest_id2" class="select-drop">
                                  <option value="0">9.00 am</option>
                                  <option value="1">10.00 am</option>
                                  <option value="2">11.00 am</option>
                                  <option value="3">12.00 pm</option>
                                  <option value="3">13.00 pm</option>
                                  <option value="3">14.00 pm</option>
                                  <option value="3">15.00 pm</option>
                                  <option value="3">16.00 pm</option>
                                </select>
                                <div class="icon-clock">
                                  <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-5 col-sm-12 col-xs-5" for="inputSuccess3">Adults:</label>
                          <div class="col-md-5 col-sm-12 col-xs-7 datepickerWrap">
                            <div class="count-input">
                              <a class="incr-btn" data-action="decrease" href="#">–</a>
                              <input class="quantity" type="text" value="1">
                              <a class="incr-btn" data-action="increase" href="#">+</a>
                              </div>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12">
                            <p class="price">$99</p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-5 col-sm-12 col-xs-5" for="inputSuccess3">Children:</label>
                          <div class="col-md-5 col-sm-12 col-xs-7 datepickerWrap">
                            <div class="count-input">
                              <a class="incr-btn" data-action="decrease" href="#">–</a>
                              <input class="quantity" type="text" value="0">
                              <a class="incr-btn" data-action="increase" href="#">+</a>
                              </div>
                          </div>
                          <div class="col-md-2 col-sm-12 col-xs-12">
                            <p class="price">$59</p>
                          </div>
                        </div>
                        <div class="totalCost">
                          <div class="col-xs-8 totalCostLeft">
                            <p>Total Cost</p>
                          </div>
                          <div class="col-xs-4 totalCostRight">$99</div>
                        </div>
                        <div class="col-sm-12">
                          <a href="#" class="btn btn-block buttonTransparent">Check now <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>
    <section class="relatedSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="sectionTitle2">
              <h2>you may also like</h2>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="{{ asset('assets/front/img/home/deal/deal-01.jpg') }}" alt="deal-image">
              <a href="single-package-right-sidebar.html" class="pageLink"></a>
              <div class="discountInfo discountCol-3">
                <div class="discountOffer">
                  <h4>
                    45% <span>OFF</span>
                  </h4>
                </div>
                <ul class="list-inline rating homePage">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                </ul>
                <ul class="list-inline duration">
                  <li>7 days</li>
                  <li>15 hrs</li>
                  <li>15 min</li>
                </ul>
              </div>
              <div class="caption">
                <h4><a href="single-package-right-sidebar.html" class="captionTitle">France / europe</a></h4>
                <p>Integer purus ex, dictum nec elementum eu, tristique vel lectus. Donec rutrum lectus et pharetra egestas.</p>
                <div class="detailsInfo">
                  <h5>
                    <span>Start From</span>
                    $299
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li><a href="single-package-fullwidth.html" class="btn buttonTransparent">Details</a></li>
                    <li><a href="#" class="btn buttonTransparent"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="{{ asset('assets/front/img/home/deal/deal-02.jpg') }}" alt="deal-image">
              <a href="single-package-right-sidebar.html" class="pageLink"></a>
              <div class="discountInfo discountCol-3">
                <div class="discountOffer">
                  <h4>
                    45% <span>OFF</span>
                  </h4>
                </div>
                <ul class="list-inline rating homePage">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                </ul>
                <ul class="list-inline duration">
                  <li>7 days</li>
                  <li>15 hrs</li>
                  <li>15 min</li>
                </ul>
              </div>
              <div class="caption">
                <h4><a href="single-package-right-sidebar.html" class="captionTitle">France / europe</a></h4>
                <p>Integer purus ex, dictum nec elementum eu, tristique vel lectus. Donec rutrum lectus et pharetra egestas.</p>
                <div class="detailsInfo">
                  <h5>
                    <span>Start From</span>
                    $299
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li><a href="single-package-fullwidth.html" class="btn buttonTransparent">Details</a></li>
                    <li><a href="#" class="btn buttonTransparent"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xs-12">
            <div class="thumbnail deals">
              <img src="{{ asset('assets/front/img/home/deal/deal-03.jpg') }}" alt="deal-image">
              <a href="single-package-right-sidebar.html" class="pageLink"></a>
              <div class="discountInfo discountCol-3">
                <div class="discountOffer">
                  <h4>
                    45% <span>OFF</span>
                  </h4>
                </div>
                <ul class="list-inline rating homePage">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                </ul>
                <ul class="list-inline duration">
                  <li>7 days</li>
                  <li>15 hrs</li>
                  <li>15 min</li>
                </ul>
              </div>
              <div class="caption">
                <h4><a href="single-package-right-sidebar.html" class="captionTitle">France / europe</a></h4>
                <p>Integer purus ex, dictum nec elementum eu, tristique vel lectus. Donec rutrum lectus et pharetra egestas.</p>
                <div class="detailsInfo">
                  <h5>
                    <span>Start From</span>
                    $299
                  </h5>
                  <ul class="list-inline detailsBtn">
                    <li><a href="single-package-fullwidth.html" class="btn buttonTransparent">Details</a></li>
                    <li><a href="#" class="btn buttonTransparent"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<!-- FOOTER -->
<footer>
  <div class="footer clearfix">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-xs-12">
          <div class="footerContent">
            <a href="index.html" class="footer-logo"><img src="{{ asset('assets/front/img/logo-color-sm.png') }}" alt="footer-logo"></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute </p>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
          <div class="footerContent">
            <h5>contact us</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod.</p>
            <ul class="list-unstyled">
              <li><i class="fa fa-home" aria-hidden="true"></i>61 Park Street, Fifth Avenue, NY</li>
              <li><i class="fa fa-phone" aria-hidden="true"></i>[88] 657 524 332</li>
              <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailTo:info@star-travel.com">info@star-travel.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
          <div class="footerContent imgGallery">
            <h5>Gallery</h5>
            <div class="row">
              <div class="col-xs-4">
                <a class="fancybox-pop" href="{{ asset('assets/front/img/home/gallery/thumb-gallery-1.jpg') }}"><img src="{{ asset('assets/front/img/home/gallery/thumb-gallery-1.jpg') }}" alt="image"></a>
              </div>
              <div class="col-xs-4">
                <a class="fancybox-pop" href="{{ asset('assets/front/img/home/gallery/thumb-gallery-2.jpg') }}"><img src="{{ asset('assets/front/img/home/gallery/thumb-gallery-2.jpg') }}" alt="image"></a>
              </div>
              <div class="col-xs-4">
                <a class="fancybox-pop" href="{{ asset('assets/front/img/home/gallery/thumb-gallery-3.jpg') }}"><img src="{{ asset('assets/front/img/home/gallery/thumb-gallery-3.jpg') }}" alt="image"></a>
              </div>
              <div class="col-xs-4">
                <a class="fancybox-pop" href="{{ asset('assets/front/img/home/gallery/thumb-gallery-4.jpg') }}"><img src="{{ asset('assets/front/img/home/gallery/thumb-gallery-4.jpg') }}" alt="image"></a>
              </div>
              <div class="col-xs-4">
                <a class="fancybox-pop" href="{{ asset('assets/front/img/home/gallery/thumb-gallery-5.jpg') }}"><img src="{{ asset('assets/front/img/home/gallery/thumb-gallery-5.jpg') }}" alt="image"></a>
              </div>
              <div class="col-xs-4">
                <a class="fancybox-pop" href="{{ asset('assets/front/img/home/gallery/thumb-gallery-6.jpg') }}"><img src="{{ asset('assets/front/img/home/gallery/thumb-gallery-6.jpg') }}" alt="image"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
          <div class="footerContent">
            <h5>newsletter</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. </p>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter your email" aria-describedby="basic-addon21">
              <span class="input-group-addon" id="basic-addon21"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
            </div>
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyRight clearfix">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-push-6 col-xs-12">
          <ul class="list-inline">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-sm-pull-6 col-xs-12">
          <div class="copyRightText">
            <p>Copyright © 2018. All Rights Reserved by <a target="_blank" href="">LuxuryExpeditions</a>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>

<!-- Signup Modal -->
<div class="modal fade signupLoging" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalContentCustom">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create your account</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="form-group">
            <input type="text" class="form-control bg-ash" id="exampleInputEmail1" placeholder="Full Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control bg-ash" id="exampleInputPassword1" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control bg-ash" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> I agree to the terms of use and privacy.
            </label>
          </div>
          <button type="submit" class="btn btn-default">Login</button>
        </form>
        <div class="or">
          or
        </div>
        <a class="btn btn-default btnSocial"  href="#">Log in with facebook</a>
      </div>

      <div class="modal-footer">
          <div class="dontHaveAccount">
            <p>Don’t have an Account?<a href=""> Sign up</a></p>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Login Modal -->
<div class="modal fade signupLoging" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalContentCustom">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Log in to your account</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="form-group">
            <input type="email" class="form-control bg-ash" id="exampleInputPassword1" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control bg-ash" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
            <a class="forgotPass clerfix" href="">Fogot Password?</a>
          </div>
          <button type="submit" class="btn btn-default">Login</button>
        </form>
        <div class="or">
          or
        </div>
        <a class="btn btn-default btnSocial"  href="#">Log in with facebook</a>
      </div>

      <div class="modal-footer">
          <div class="dontHaveAccount">
            <p>Don’t have an Account?<a href=""> Sign up</a></p>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- JAVASCRIPTS -->
<script src="{{ asset('assets/front/plugins/jquery/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/selectbox/jquery.selectbox-0.1.3.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/front/plugins/jquery/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/counter-up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/isotope/isotope.min.js') }}"></script>
<script src="{{ asset('assets/front/plugins/isotope/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('assets/front/plugins/isotope/isotope-triger.js') }}"></script>
<script src="{{ asset('assets/front/plugins/countdown/jquery.syotimer.js') }}"></script>
<script src="{{ asset('assets/front/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/front/js/custom.js') }}"></script>

</body>

</html>
