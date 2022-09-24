@extends('layouts.app')
@section('title','تعديل عقار')
@section('content')
<div class="col-sm-12 text-center">
<style>
	@media (min-width: 767px){
		.breadcrumb{
			margin: 20px 10px 20px 10px !important;
		}
	} 
	.breadcrumb{
		background-color: #F1F3FA !important
	}
	.breadcrumb li{
		display: inline-block !important;
		margin-left: 10px;
	}
	.breadcrumb li:after{
		content: "/";

	}
	.breadcrumb li:last-child:after{
		content: "";

	}
</style>
	<ol class="breadcrumb">
	      <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
	  	</ol>
</div>
<div class="col-sm-8" style="background-color: #F1F3FA;;margin-bottom: 77px;">
		
	<div class="text-center">
	   		@include('website.bu.forms.formedit')  	
		
	</div>
</div>
<div class="col-sm-3 text-center" style="background-color: #F1F3FA;margin-left: 20px">
	
    	@include('website/bu/sidebar',["search"=>$search])

</div>
@endsection