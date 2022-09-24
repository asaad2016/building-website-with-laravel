<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        {{ geisettings() }}
        |
        @yield('title')
    </title>
      <!--link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'-->
      {!! Html::style('website/css/font-awesome.min.css') !!}
      {!! Html::style('website/css/bootstrap.min.css') !!}
      <!--link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"-->
      {!! Html::style('website/css/flexslider.css') !!}
      
      {!! Html::style('website/css/styles.css') !!}

      {!! Html::style('website/css/queries.css') !!}
      {!! Html::style('website/css/animate.css') !!}
      {!! Html::style('cust/websitebu.css') !!}
      {!! Html::style('cust/sweetalert.css') !!}
      {!! Html::style('website/css/style.css') !!}
   

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
     
    <!-- Fonts -->
   <style>
     @media (min-width: 767px){
      #collapse{
        display: none;
      }
     }
     #collapse{
        background-color: transparent;
      }
   </style>
    
</head>
<body id="app-layout" style="direction: rtl;">
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">العقارات</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
        <li class=""><a href="{{ url('/') }}" class="{{ setactive(['']) }}">الرئيسية</a></li>
        <li><a href="{{ url('/showall') }}" class="{{ setactive(['showall']) }}">كل العقارات</a></li>
        <li><a href="{{ url('/contact') }}"  class="{{ setactive(['contact']) }}"> اتصل بنا</a></li>
        @if(Auth::check())
          @if(Auth::user()->admin == 1)
          <li><a href="{{ url('/adminpanal/bu/index') }}" class="{{ setactive(['adminpanal/bu/index']) }}"> لوحة التحكم </a></li>
          @endif
          <li><a href="{{ url('/logout') }}" class="{{ setactive(['logout']) }}">الخروج</a></li>
        @else
          <li><a href="{{ url('/login') }}" class="{{ setactive(['login']) }}">الدخول</a></li>
          <li><a href="{{ url('/register') }}" class="{{ setactive(['register']) }}">تسجيل عضوية جديدة</a> </li>
        @endif
        
       
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
  <div class="row">
    @yield('content')
  </div>
</div>  
<footer>
  <div class="container text-center" style="font-size: 30px">
    <div class="row">
      <div class="col-md-12">
        <p>مؤسسة اسعد للبرمجيات</p>
      </div>
    </div>
  </div>
</footer>
{!! Html::script('website/js/jquery-3.1.0.min.js') !!}
{!! Html::script('website/js/waypoints.min.js') !!}
{!! Html::script('website/js/poper.min.js') !!}
{!! Html::script('website/js/bootstrap.min.js') !!}
{!! Html::script('website/js/scripts.js') !!}
{!! Html::script('website/js/jquery.flexslider.js') !!}
{!! Html::script('website/js/modernizr.js') !!}
{!! Html::script('cust/websitebu.js') !!}
{!! Html::script('website/js/custom.js') !!}
{!! Html::script('cust/sweetalert.min.js') !!}
@include('layouts/flashmessage')
<!-- JavaScripts -->
 </body>
</html>
