<!DOCTYPE html>
<html lang="ar"  class="rtl" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="velespay-verification" content="6Yk5zPor37wMI5UE8jdJ" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- Custom bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">
    <title>طلب جديد</title>
</head>
<body  class="rtl" >

    <div class="row" style="border: none;
    background: #213b52;">
        <div class="container">
        <div class="wrapper wrapper-navbar">


        <!-- Start Nav -->
@include('includes.header')
<!-- End Nav -->


<!-- Start Sidebar  -->
@include('includes.side')
<!-- Start Sidebar  -->
        </div>
    </div>
    </div>


<div class="content  rtl-content ">
    @yield('content')

    @include('includes.footer')
</div>


</div>
</div>

</div>
<script type="text/javascript" src="https://cdn.mypanel.link/libs/jquery/1.12.4/jquery.min.js">
</script>
<script type="text/javascript" src="https://cdn.mypanel.link/global/flpbonhmkq9tsp29.js">
</script>
<script type="text/javascript" src="https://cdn.mypanel.link/global/a4kdpfesx15uh7ae.js">
</script>
<script type="text/javascript" src="https://cdn.mypanel.link/global/596z6ya3isgxcipy.js">
</script>
<script type="text/javascript" src="https://cdn.mypanel.link/global/8rdmnbunrx78dxjw.js">
</script>
<script type="text/javascript" src="https://cdn.mypanel.link/global/wnzsoolloslhfumj.js">
</script>
<script type="text/javascript" src="https://cdn.mypanel.link/9e34a3/nf2ak1h4llsa0njt.js">
</script>
<script type="text/javascript" src="https://cdn.mypanel.link/9e34a3/7sel7jrdqus1mrsq.js">
</script>
<script src="{{asset('js/app.js')}}">
</script>

@yield('scripts')
</body>
</html>
