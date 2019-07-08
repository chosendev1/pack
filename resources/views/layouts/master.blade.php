<!-- site head -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Empty page - tabler.github.io - a responsive, flat and full featured admin template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <!-- Dashboard Core -->
    <link href="/assets/css/dashboard.css" rel="stylesheet" />
    
    <!-- c3.js Charts Plugin -->
    <link href="/assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <!-- Google Maps Plugin -->
    <link href="/assets/plugins/maps-google/plugin.css" rel="stylesheet" />

</head>
  <body class="">
    <div class="page">
      <div class="page-main">
        @include('layouts.header') 
        <div class="my-3 my-md-5">
            <div class="container">
                @yield('content')
            </div>
        </div>
      </div>
    @include('layouts.footer') 
    </div>
  </body>
</html>
    <!-- site foot -->
<script src="/assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
</script>
<script src="/assets/js/dashboard.js"></script>
<script src="/assets/plugins/charts-c3/plugin.js"></script>
<script src="/assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
<script src="/assets/plugins/input-mask/plugin.js"></script>
{{--<script src="/js/vendors/selectize.min.js"></script>
<script src="/js/vendors/bootstrap.bundle.min.js"></script>
<script src="/js/vendors/chart.bundle.min.js"></script>
<script src="/js/vendors/circle-progress.min.js"></script>
<script src="/js/vendors/jquery-3.2.1.min.js"></script>
<script src="/js/vendors/jquery-3.2.1.slim.min.js"></script>
<script src="/js/vendors/jquery-jvectormap-2.0.3.min.js"></script>
<script src="/js/vendors/jquery-jvectormap-de-merc.js"></script>
<script src="/js/vendorsjquery-jvectormap-world-mill/.js"></script>
<script src="/js/vendors/jquery.sparkline.min.js"></script>
<script src="/js/vendors/jquery.tablesorter.min.js"></script>
<script src="/js/core.js"></script>--}}

</body>
</html>
<!-- /site foot -->



 


