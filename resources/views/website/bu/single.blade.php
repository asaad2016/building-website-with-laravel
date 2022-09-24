@extends('layouts.app')
@section('title')
   العقارات
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12 breadcrumbs text-center" style="padding-right: 0">
			<ol class="breadcrumb">
		      <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئيسية </a>
		      </li>		  
		  	</ol>

		</div>
		<!--div class="col-sm-12 text-left" style="margin-left: 17px">	
			< Go to www.addthis.com/dashboard to customize your tools --> <!--script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a6b1a7f346cd019"></script>
			< Go to www.addthis.com/dashboard to customize your tools --> <!--div class="addthis_inline_share_toolbox"></div>
		</div-->		
		<div class="col-sm-8" style="margin-bottom: 77px;">

			<div class="col-sm-12" style="background-color: #F1F3FA;margin-bottom: 20px;padding-top: 5px"> 
				@include("website.bu.singleshare",['busingle'=>$single]) 
				<div id="googleMap" style="width:100%;height:400px;"></div>
			</div>
			<div class="col-sm-12" style="background-color: #F1F3FA;margin-bottom: 20px;">
					<h2 class="text-center" style="margin-bottom: 20px;text-align: center;padding-top: 10px">الموضوعات المرتبطة</h2>
					
					@include("website.bu.shaefile",['burent'=>$samerent,'butype'=>$sametype])
				
			</div>
			
		</div>
			<div class="col-sm-4 text-center" style="background-color: #F1F3FA;">
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