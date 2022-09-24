@extends('layouts.app')
@section('title')
   العقارات
@endsection
@section('content')
udfgygryutrutreu
<div class="col-md-8" style="background-color: #F1F3FA;margin-right: 10px;margin-bottom: 77px;">
	<div class="text-center">

	    <h2>Ecommerce Products Display Layout</h2>
	    <p>
	        This snippent uses <a href="http://daneden.github.io/animate.css/" target="_blank">Animate.css</a> for the animation of the buttons.
	    </p>
	
	   		@include("website.bu.share",['bu'=>$all])
	  
		
	</div>
 </div>
<div class="col-md-3 text-center" style="background-color: #F1F3FA;">
    @include('website/bu/sidebar')  
    
</div>

@endsection
