<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Minton - Responsive Admin Dashboard Template</title>

        {!!Html::style('assets/admin/plugins/switchery/switchery.min.css')!!}
        {!!Html::style('assets/admin/css/bootstrap.min.css')!!}
        {!!Html::style('assets/admin/css/icons.css')!!}
        {!!Html::style('assets/admin/css/style.css')!!}
    
        {!!Html::style('assets/admin/js/modernizr.min.js')!!}
    

    </head>
    <body>

        <div class="ex-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <svg class="svg-box" width="380px" height="500px" viewBox="0 0 837 1045" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                               sketch:type="MSPage">
                                <path d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z"
                                      id="Polygon-1" stroke="#3bafda" stroke-width="6" sketch:type="MSShapeGroup"></path>
                                <path d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z"
                                      id="Polygon-2" stroke="#7266ba" stroke-width="6" sketch:type="MSShapeGroup"></path>
                                <path d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z"
                                      id="Polygon-3" stroke="#f76397" stroke-width="6" sketch:type="MSShapeGroup"></path>
                                <path d="M639,529 L773,607.846761 L773,763.091627 L639,839 L505,763.091627 L505,607.846761 L639,529 Z"
                                      id="Polygon-4" stroke="#00b19d" stroke-width="6" sketch:type="MSShapeGroup"></path>
                                <path d="M281,801 L383,861.025276 L383,979.21169 L281,1037 L179,979.21169 L179,861.025276 L281,801 Z"
                                      id="Polygon-5" stroke="#ffaa00" stroke-width="6" sketch:type="MSShapeGroup"></path>
                            </g>
                        </svg>
                    </div>

                    <div class="col-lg-6">
                        <div class="message-box">
                            <h1 class="m-b-0">404</h1>
                            <h6>Pagina no encontrada</h6>
                            <div class="buttons-con">
                                <div class="action-link-wrap">
                                    <a href="{{ URL::previous() }}" class="btn btn-custom btn-primary waves-effect waves-light m-t-20">Regresar Atras</a>
                                    <a href="{{('/')}}" class="btn btn-custom btn-primary waves-effect waves-light m-t-20">Ir a la Pagina Principal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        {!!Html::script('assets/admin/js/jquery.min.js')!!}
        {!!Html::script('assets/admin/js/popper.min.js')!!}
        {!!Html::script('assets/admin/js/bootstrap.min.js')!!}
        {!!Html::script('assets/admin/js/detect.js')!!}
        {!!Html::script('assets/admin/js/fastclick.js')!!}
        {!!Html::script('assets/admin/js/jquery.slimscroll.js')!!}
        {!!Html::script('assets/admin/js/jquery.blockUI.js')!!}
        {!!Html::script('assets/admin/js/waves.js')!!}
        {!!Html::script('assets/admin/js/wow.min.js')!!}
        {!!Html::script('assets/admin/js/jquery.nicescroll.js')!!}
        {!!Html::script('assets/admin/js/jquery.scrollTo.min.js')!!}
        {!!Html::script('assets/admin/plugins/switchery/switchery.min.js')!!}
  

        <!-- Custom main Js -->
        {!!Html::script('assets/admin/js/jquery.core.js')!!}
        {!!Html::script('assets/admin/js/jquery.app.js')!!}
      

    </body>
</html>