<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    @include('layouts.navbar')
    @include('layouts.sidebar')
        

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @include('layouts.breadcrumb_header')
        
        @yield('content')               
                
        <div class="=row">
                <div class="col-sm-12">
                    <p class="back-link">Lumino Theme by 
                        <a href="https://www.medialoot.com">Medialoot</a>
                    </p>
                </div>
            </div>
        </div>
        @include('layouts.footer')
</body>
</html>
