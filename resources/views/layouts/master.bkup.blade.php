<!-- site head -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>Musa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <link href="/css/vendor.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/main.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/color-settings.css" rel="stylesheet" type="text/css" media="all" data-role="color-settings"/>
</head>
<body class="nav-md theme-green">
<!-- /site head -->
    
    <div class="main-container">

        <!-- sidebar -->
        @include('layouts.sidebar')
        <!-- /sidebar -->
        <div class="content-wrapper">
            <!-- header content  -->   
                @include('layouts.header')
            <!-- /header content -->

            <!-- theme settings-->
                @include('layouts.theme-settings')         
            <!-- /theme settings -->
            
            <!-- page content -->
            <div class="main-content small-gutter">
                <!-- START PAGE COVER -->
                @include('layouts.breadcrumb')
                <!-- END PAGE COVER -->
                @yield('content')
            </div>
            <!-- /page content -->

            <!-- footer content -->
            @include('layouts.footer')
            <!-- /footer content -->
         </div>
    </div>
    <!-- site foot -->
<script src="/js/vendor.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/settings.min.js"></script>
<script src="/js/charts.js"></script>
</body>
</html>
    <!-- /site foot -->



 


