<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eyelix - FoodCosting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="<?php echo e(asset('image/png')); ?>" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/metisMenu.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slicknav.min.css')); ?>">
    <!-- amchart css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/export.css')); ?>" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/typography.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/default-css.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/styles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
    <!-- modernizr css -->
    <script src="<?php echo e(asset('assets/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>

     <!-- Start datatable css -->
     <!-- <link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/css/cdn/jquery.dataTables.css')); ?>">dataTables.bootstrap4.min
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/css/cdn/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="asset('asset/2.2.3/css/cdn/responsive.bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="asset('asset/2.2.3/css/cdn/responsive.jqueryui.min.css"> -->
     <!-- style css -->

    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <h1>EYELIX</h1>
                    <!-- <a href=""><img src="<?php echo e(asset('assets/images/icon/logo.png')); ?>" alt="logo"></a> -->
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                        <li><a href="/dashboard" aria-expanded="true"><i class="ti-dashboard"></i> <span>dashboard</span></a></li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Receiving
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="/createSO">SO</a></li>
                                    <li><a href="">Approval</a></li>
                                    <li><a href="">SO Upload</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Finish Good</span></a>
                                <ul class="collapse">
                                    <li><a href="">FG Upload</a></li>
                                    <li><a href="">Approval</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>Inventory</span></a>
                                <ul class="collapse">
                                    <li><a href="">Status/Details</a></li>
                                    <li><a href="">Item List (w/ Cost)</a></li>
                                    <li><a href="">Item List (w/o Cost)</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>Reports</span></a>
                                <ul class="collapse">
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Reference</span></a>
                                <ul class="collapse">
                                    <li><a href="">Brand Lists</a></li>
                                    <li><a href="">Category Lists</a></li>
                                    <li><a href="">Sub-Category Lists</a></li>
                                    <li><a href="">UOM Lists</a></li>
                                    <li><a href="">Store Lists</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>User</span></a>
                                <ul class="collapse">
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="user-profile pull-right">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin<i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <?php echo $__env->yieldContent('content'); ?>
            
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="<?php echo e(asset('assets/js/vendor/jquery-2.2.4.min.js')); ?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.slimscroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.slicknav.min.js')); ?>"></script>

     <!-- start chart js -->
     <script src="<?php echo e(asset('assets/js/cdn/Chart.min.js')); ?>"></script>
    <!-- start highcharts js -->
    <script src="<?php echo e(asset('assets/js/cdn/highcharts.js')); ?>"></script>
    <!-- start zingchart js -->
    <script src="<?php echo e(asset('assets/js/cdn/zingchart.min.js')); ?>"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="<?php echo e(asset('assets/js/line-chart.js')); ?>"></script>
    <!-- all bar chart activation -->
    <script src="<?php echo e(asset('assets/js/bar-chart.js')); ?>"></script>
    <!-- all pie chart -->
    <script src="<?php echo e(asset('assets/js/pie-chart.js')); ?>"></script>
    <!-- others plugins -->
    <script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>

  

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                    searching: true, 
                    // serverSide: true,
                    // ajax: {
                    // url: '/createSO',
                    // type: 'POST' // Adjust the HTTP method if needed
                    //      data: function (d) {
                    // // Add any additional data you need to send to the server
                    // return d;
                // }
                
                
                });
                $('#dataTable_details').DataTable({
                searching: true, 
                // serverSide: true,
                // ajax: {
                // url: '/createSO',
                // type: 'POST' // Adjust the HTTP method if needed
                //      data: function (d) {
                // // Add any additional data you need to send to the server
                // return d;
                  // }
            
             
                });
                $('#dataTable_details').on('click', 'td', function() {
                    var cellIndex = $(this).data('_DT_CellIndex');
                    console.log('Cell index:', cellIndex);
                });
        });
    </script>  

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Eyelix-FoodCostingApp\resources\views/index.blade.php ENDPATH**/ ?>