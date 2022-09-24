@extends('layouts.app')
@section('title')
    صفحة الترحيب
@endsection
@section('content')
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="/website//css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="/website//css/style5.css"> <!-- Resource style -->
  <script src="/website//js/modernizr.js"></script> 
  <style>
    #header li{
      display: inline-block !important;
    }
  </style>
<header id="header">  
  
    <div class="header text-center">
      <div class="row" style="width: 100%;">
        <div class="col-sm-12">
               {!! Form::open(['url' => 'search','method' => 'get']) !!}
          <ul>
            <li style="margin-bottom: 10px;">
               {!! Form::text("bu_price_from",null,['class'=>'form-control','placeholder' => ' من سعر']) !!}
            </li>
            <li style="margin-bottom: 10px;">
               {!! Form::text("bu_price_to",null,['class'=>'form-control','placeholder' => 'الي سعر']) !!}
            </li>
            <li style="margin-bottom: 10px;">
               {!! Form::select("rooms",rooms(),null,['class'=>'form-control','placeholder' => 'عدد الغرف']) !!}
            </li>
          </ul>
          <ul>
            <li style="margin-bottom: 10px;">
               {!! Form::select("bu_type",bu_type(),null,['class'=>'form-control','placeholder' => 'نوع العقار']) !!}
            </li>
            <li style="margin-bottom: 10px;margin">
               {!! Form::select("bu_rent",bu_rent(),null,['class'=>'form-control','placeholder' => 'نوع العملية']) !!}
            </li>
            <li style="margin-bottom: 10px;">
               {!! Form::text("bu_square",null,['class'=>'form-control','placeholder' => 'المساحة']) !!}
            </li>
          </ul>
         
              <button type="submit" class="back">ابحث</button>

           {!! Form::close() !!}
        </div>
         <div class="col-sm-12" style="margin-top: 20px">
           {!! Form::open(['url' => 'building/add','method' => 'get']) !!}
               <button type="submit" class="back">اضف عقار جديد</button>
           {!! Form::close() !!}
         </div>

        
      </div>
    </div>   
</header>
<div class="slider" style="margin-top: 30px;max-height: 200px;">
  <ul class="cd-items cd-container">
    @foreach(\App\Bu::where("bu_status",1)->get() as $bu)
      <li class="cd-item">
        <img width="231" height="260" src="/admin/img/{{ $bu->image }}" alt="{{ $bu->bu_name }}">
        <a href="#" class="cd-trigger" alt="{{ $bu->bu_name }}" data-img="/admin/img/{{ $bu->image }}" data-name="{{ $bu->bu_name }}" data-content="{{ $bu->bu_small_dis }}" data-buid="{{ $bu->id }}">نبذة مختصرة</a>
      </li>
    @endforeach
     <!-- cd-item -->

  </ul>
  <div class="cd-quick-view">
  <div class="cd-slider-wrapper">

    <ul class="cd-slider">
        <li class="selected">
        <img width="400" height="450" src="/admin/img/item-1.jpg" id="imgsrc" alt="Image">
        </li>
    </ul> <!-- cd-slider -->

    <ul class="cd-slider-navigation">
      <li><a class="cd-next" href="#0">Prev</a></li>
      <li><a class="cd-prev" href="#0">Next</a></li>
    </ul> <!-- cd-slider-navigation -->
  </div> <!-- cd-slider-wrapper -->

  <div class="cd-item-info">
    <h2 id="header_name"></h2>
    <p id="descp"></p>

    <ul class="cd-item-action">
      <li><button class="add-to-cart">Add to cart</button></li>         
      <li><a id="singlepage" href="">اقرا المزيد</a></li>  
    </ul> <!-- cd-item-action -->
  </div> <!-- cd-item-info -->
  <a href="#0" class="cd-close">Close</a>
  </div> <!-- cd-quick-view -->
</div>

<script src="/website/js/jquery-2.1.1.js"></script>

<script src="/website/js/velocity.min.js"></script>
<script src="/website/js/main.js"></script> 
@endsection
