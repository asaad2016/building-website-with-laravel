@extends('layouts.app')
@section('title')
   العقارات
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
		<style>
			@media (min-width: 767px){
				.breadcrumb{
					margin: 20px 20px 20px -10px !important;
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
		      <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئيسية </a>
		      </li>		  
		  	</ol>

		</div>
		<div class="col-sm-8" style="margin-bottom: 77px;">

		<div class="text-center">	   	
			<div class="alert alert-danger">هذا العقار لم يتم 	الموافقة عليه بعد
			</div>
		</div>
			
			
		</div>
		<div class="col-sm-3 text-center" style="background-color: #F1F3FA;margin-left: 10px;">
			<div class="row">
		   		 @include('website/bu/sidebar')
			 </div>

		</div>
	</div>
</div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,25.7777777),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map)
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

@endsection
<!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqMdEhnpNSxzFLXarMym1JhX5qtQju19s"></script>
< this url for mor safe api goole map
https://console.developers.google.com/apis/credentials/key/124?authuser=0&project=my-project-1516970577535&pli=1-->
