<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
         <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Minton - Responsive Admin Dashboard Template</title>
		{!!Html::style('assets/admin/plugins/switchery/switchery.min.css')!!}
		{!!Html::style('assets/admin/plugins/jquery-circliful/css/jquery.circliful.css')!!}
		{!!Html::style('assets/admin/css/bootstrap.min.css')!!}
		{!!Html::style('assets/admin/css/icons.css')!!}
		{!!Html::style('assets/admin/css/style.css')!!}
		{!!Html::script('assets/admin/js/modernizr.min.js')!!}
        {!!Html::style('assets/admin/plugins/fileinput/css/fileinput.css')!!}
        <!-- DataTables -->
        {!!Html::style('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css')!!}
        {!!Html::style('assets/admin/plugins/datatables/buttons.bootstrap4.min.css')!!}


        {!!Html::style('assets/admin/plugins/bootstrap-sweetalert/sweet-alert.css')!!}
        {!!Html::style('assets/admin/plugins/custombox/dist/custombox.min.css')!!}
        
    </head>


    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @include('admin.layouts.navbartop')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
          
            @include('admin.layouts.navbarleft')   
            <!-- Left Sidebar End -->




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
                  <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid" id="content_page">
                    
                       
                    </div>
                </div>
            </div>            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            @include('admin.layouts.sidebaright')
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
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
        
        <!-- Required datatable js -->
        {!!Html::script('assets/admin/plugins/datatables/jquery.dataTables.min.js')!!}
        {!!Html::script('assets/admin/plugins/datatables/dataTables.bootstrap4.min.js')!!}
        
        <!-- Buttons examples -->
        {!!Html::script('assets/admin/plugins/datatables/dataTables.buttons.min.js')!!}
        {!!Html::script('assets/admin/plugins/datatables/buttons.bootstrap4.min.js')!!}
        {!!Html::script('assets/admin/plugins/datatables/jszip.min.js')!!}
        {!!Html::script('assets/admin/plugins/datatables/pdfmake.min.js')!!}
        {!!Html::script('assets/admin/plugins/datatables/vfs_fonts.js')!!}
        {!!Html::script('assets/admin/plugins/datatables/buttons.html5.min.js')!!}
        {!!Html::script('assets/admin/plugins/datatables/buttons.print.min.js')!!}
        {!!Html::script('assets/admin/plugins/datatables/buttons.colVis.min.js')!!}
        

        <!-- Counter Up  -->
        {!!Html::script('assets/admin/plugins/waypoints/lib/jquery.waypoints.min.js')!!}
        {!!Html::script('assets/admin/plugins/counterup/jquery.counterup.min.js')!!}
      

        <!-- circliful Chart -->
        {!!Html::script('assets/admin/plugins/jquery-circliful/js/jquery.circliful.min.js')!!}
        {!!Html::script('assets/admin/plugins/jquery-sparkline/jquery.sparkline.min.js')!!}
        

        <!-- skycons -->
        {!!Html::script('assets/admin/plugins/skyicons/skycons.min.js')!!}
       

        <!-- Page js  -->
        {!!Html::script('assets/admin/pages/jquery.dashboard.js')!!}

      
        <!-- Notification js -->
        {!!Html::script('assets/admin/plugins/notifyjs/dist/notify.min.js')!!}
        {!!Html::script('assets/admin/plugins/notifications/notify-metro.js')!!}

        <!-- SWEET ALERT -->
        {!!Html::script('assets/admin/plugins/bootstrap-sweetalert/sweet-alert.min.js')!!}
        {!!Html::script('assets/admin/pages/jquery.sweet-alert.init.js')!!}


        <!-- Modal-Effect -->
        {!!Html::script('assets/admin/plugins/custombox/dist/custombox.min.js')!!}
        {!!Html::script('assets/admin/plugins/custombox/dist/legacy.min.js')!!}

        
        <!-- file input -->
        {!!Html::script('assets/admin/plugins/fileinput/js/plugins/sortable.js')!!}
        {!!Html::script('assets/admin/plugins/fileinput/js/fileinput.js')!!}
        {!!Html::script('assets/admin/plugins/fileinput/js/locales/fr.js')!!}
        {!!Html::script('assets/admin/plugins/fileinput/js/locales/es.js')!!}
        {!!Html::script('assets/admin/plugins/fileinput/themes/explorer-fa/theme.js')!!}
        {!!Html::script('assets/admin/plugins/fileinput/themes/fa/theme.js')!!}   
        {!!Html::script('assets/admin/plugins/jquery-validation/js/jquery.validate.min.js')!!} 

        <!-- Custom main Js -->
        {!!Html::script('assets/admin/js/jquery.core.js')!!}
        {!!Html::script('assets/admin/js/jquery.app.js')!!}
  



        
        {!!Html::script('assets/admin/functions/functions.js')!!}

    </body>
</html>