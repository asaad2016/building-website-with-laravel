<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
 <style>
 		#profile li{
 		width: 80% !important;
 		margin-bottom: 10px;
 		padding: 10px;
 		background-color: #fff;
 	}
 	.profile_search li{
 		width: 80%;
 		margin-bottom: 5px;
 		padding: 10px;
	}
 </style>
 @if(Auth::check())
<div class="profile" id="profile" style="padding-top: 15px;">
	<div class="profile-sidebar">
		<!-- SIDEBAR USERPIC -->
	
		<!-- END SIDEBAR USER TITLE -->
		<!-- SIDEBAR BUTTONS -->
		<!--div class="profile-userbuttons">
			<button type="button" class="btn btn-success btn-sm">Follow</button>
			<button type="button" class="btn btn-danger btn-sm">Message</button>
		</div>
		<! END SIDEBAR BUTTONS -->
		<!-- SIDEBAR MENU -->
		<div class="profile-usermenu">
			<ul class="nav list-unstyled text-right">
				<li class="{{ setactive(['user/edit']) }}">
					<a href="{{ url('/user/edit') }}">
					<i class="fa fa-user"></i>
					تعديل المعلومات الشخصية</a>
				</li>
				<li >
					<a href="{{ url('/allbuilds') }}" class="{{ setactive(['allbuilds']) }}">
					<i class="fa fa-home"></i>
					العقارات المفعلة</a>
				</li>
				<li class="active">
					<a href="{{ url('/allbuild') }}" class="{{ setactive(['allbuild']) }}">
					<i class="fa fa-home"></i>
					العقارات غير المفعلة</a>
				</li>
				<li>
					<a href="{{ url('/building/add') }}" class="{{ setactive(['building','add']) }}">
					<i class="fa fa-flag"></i>
					اضف عقار </a>
				</li>
			</ul>
		</div>
		<!-- END MENU -->
	</div>	
</div>
<hr style="border: 2px solid #fff;width: 100%;">
@endif
<div class="profile profile_search" style="margin-bottom: 20px">
	<div class="profile-sidebar">
		<h2>البحث المتقدم</h2>
		<div class="profile-usermenu">
			{!! Form::open(['url' => 'search','method' => 'get']) !!}
			<ul class="nav">
				<li>
					 {!! Form::text("bu_price_from",null,['class'=>'form-control','placeholder' => ' من سعر']) !!}
				</li>
				<li>
					 {!! Form::text("bu_price_to",null,['class'=>'form-control','placeholder' => 'الي سعر']) !!}
				</li>
				<li>
					 {!! Form::select("rooms",rooms(),null,['class'=>'form-control','placeholder' => 'عدد الغرف']) !!}
				</li>
				<li>
					 {!! Form::select("bu_type",bu_type(),null,['class'=>'form-control','placeholder' => 'نوع العقار']) !!}
				</li>
				<li>
					 {!! Form::select("bu_rent",bu_rent(),null,['class'=>'form-control','placeholder' => 'نوع العملية']) !!}
				</li>
				<li>
					 {!! Form::text("bu_square",null,['class'=>'form-control','placeholder' => 'المساحة']) !!}
				</li>
				<li>
					 {!! Form::submit("ابحث",['class'=>'btn btn-primary']) !!}
				</li>
				
			</ul>
		</div>
		<!-- END MENU -->
	</div>

	
</div>
<hr style="border: 2px solid #fff;width: 100%;">
<div class="profile" id="profile">
	<div class="profile-sidebar">
		<!-- SIDEBAR USERPIC -->
	
		<!-- END SIDEBAR USER TITLE -->
		<!-- SIDEBAR BUTTONS -->
		<!--div class="profile-userbuttons">
			<button type="button" class="btn btn-success btn-sm">Follow</button>
			<button type="button" class="btn btn-danger btn-sm">Message</button>
		</div>
		<! END SIDEBAR BUTTONS -->
		<!-- SIDEBAR MENU -->
		<div class="profile-usermenu">
			<ul class="nav list-unstyled text-right">
				<li class="active">
					<a href="{{ url('/showall') }}" class="{{ setactive(['showall']) }}">
					<i class="fa fa-home"></i>
					كل العقارات </a>
				</li>
				<li>
					<a href="{{ url('/forrent') }}" class="{{ setactive(['forrent']) }}">
					<i class="fa fa-user"></i>
					الايجار</a>
				</li>
				<li>
					<a href="{{ url('/forbuy') }}" class="{{ setactive(['forbuy']) }}">
					<i class="fa fa-flag"></i>
					بيع </a>
				</li>
				<li>
					<a href="{{ url('/type/3') }}" class="{{ setactive(['type','3']) }}">
					<i class="fa fa-flag"></i>
					شقة </a>
				</li>
				<li>
					<a href="{{ url('/type/1') }}" class="{{ setactive(['type','1']) }}">
					<i class="fa fa-flag"></i>
					فيلا </a>
				</li>
				<li>
					<a href="{{ url('/type/2') }}" class="{{ setactive(['type','2']) }}">
					<i class="fa fa-flag"></i>
					شاليه </a>
				</li>
			</ul>
		</div>
		<!-- END MENU -->
	</div>

	
</div>
<div class="paginate text-center">
	<div class="container">
		
			<div class="col-md-12">
			@if(isset($search)  || isset($single))
			@else
			{{ $all->links() }}
			@endif
			</div>

		
	</div>
</div>

