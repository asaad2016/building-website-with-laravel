@extends('layouts.app')
@section('title')
  اضف عقار
@endsection
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
		


	}
	.breadcrumb li:last-child:after{
		content: "";

	}
</style>
	<ol class="breadcrumb">
	      <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
	       @if(isset($array))
      	 		@foreach ($array as $key => $value)
      	 			@if($value !="")
		      	 		<li>
		      	 			<a href="{{ url('/search?'.$key.'='.$value) }}">
		      	 			{{ searchnamefield()[$key] . " => "  }} 
		      	 			@if($key == "bu_type")
		      	 				{{ bu_type()[$value] }}
	      	 				@elseif($key == "bu_rent")
		      	 				{{ bu_rent()[$value] }}
	      	 				@else
		      	 				{{ $value }}
	      	 				@endif
		      	 			</a>
	      	 			</li>
      	 			@endif
      	 		@endforeach
  	 		@endif
	  	</ol>
</div>
<div class="col-sm-8" style="background-color: #F1F3FA;;margin-bottom: 77px;">
		
	<div class="text-center">
	   
	   		@include("admin.bu.form2")
	   	
		
	</div>
</div>
<div class="col-sm-3 text-center" style="background-color: #F1F3FA;margin-left: 20px">
	
    	@include('website/bu/sidebar')
   
    

</div>
@endsection
