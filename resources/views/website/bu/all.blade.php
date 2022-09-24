@extends('layouts.app')
@section('title')
   العقارات
@endsection
@section('content')
<div class="page_all">
	<div class="breadcrumbs text-center">
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
	<div style="clear: both;"></div>
	<div class="builds" style="margin-bottom: 10px;margin-top: 10px;background-color: #fff;">
		<div class="col-sm-8" style="background-color: #F1F3FA">
					   
			   		@include("website.bu.share",['bu'=>$all])
			   	
		</div>
		<div class="col-sm-3" style="background-color: #F1F3FA;margin-left: 8.3%;">
			
		    	@include('website/bu/sidebar')
		   
		    

		</div>
	</div>
	<div style="clear: both;"></div>
</div>
@endsection
