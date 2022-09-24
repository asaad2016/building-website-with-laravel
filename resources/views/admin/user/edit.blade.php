@extends('admin.layouts.layout')
@section('title','تعديل بيانات العضو')
@section('content')
	<section class="content-header">
		<h2>تعديل بيانات العضو</h2>
		<ol class="breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئسية </a></li>
          <li><a href="{{ url('/adminpanal/user/index') }}"><i class="fa fa-home"></i> لوحة تحكم الاعضاء</a></li>    
           <li><a href="{{ url('/adminpanal/user/create') }}"><i class="fa fa-plus"></i> اضافة عضو جديد </a></li>
        
        </ol>
	</section>
	<section class="content"  style="background-color: #fff; padding: 10px 20px 30px;border:1px solid #ddd;">
		<div class="row">
			<div class="col-sm-12">
				<div class="box-header">
					<h2>
						تعديل بيانات العضو
					</h2>
					
				</div>
				<div class="box-body">
					@include('admin.user.formedit')
				</div>
			</div>
			</div>
		
	</section>
	<hr style="margin: 30px 10px;border:1px solid #efcf34;">
	<section class="content"  style="background-color: #fff; padding: 10px 20px 30px;border:1px solid #ddd;">
		<div class="row">
			<div class="col-sm-12">
				<div class="box-header">
					<h2>
						تعديل كلمة السر
					</h2>
					
				</div>
				<div class="box-body">
					{!! Form::open(['url'=>'adminpanal/user/changepass','method'=>'post']) !!}
					 <input type="hidden" class="form-control" name="userid" value="{{ $user->id }}">

					  <div class="text2">
					  <div class="col-sm-8">
					  	<input  type="password" class="form-control" name="password" placeholder="تغير كلمة المرور">
					  	 
					  	</div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> تاكيد كلمة السر
                                </button>
                            </div>
                       
					  
				  	</div>
					{!! Form::close() !!}
				</div>
			</div>
			<div class="col-sm-12">
				<div class="nav-tabs-custom pull-right">
            		<ul class="nav nav-tabs list-unstyled">
            			<li><a href="#tab_2" data-toggle="tab">العقارات غير المفعلة</a></li>
		              	<li class="active"><a href="#tab_1" data-toggle="tab">العقارات المفعلة</a></li>
           			 </ul>
            		<div class="tab-content">
              			<div class="tab-pane active" id="tab_1">
              					<ul class="nav-tabs-custom">
                				<li class=" active">اسم العقار</li>
		              			<li class="pull-right1">اضيف في</li>
		              			</ul>
                				@foreach($userbuc as $userbucone)
                					<li><a href="{{ url('/adminpanal/bu/edit/' . $userbucone->id) }}">{{ $userbucone->bu_name }}</a><span class="created_at"> {{ $userbucone->created_at }}</span></li>
                				@endforeach
                			</ul>
              			</div>
              			<!-- /.tab-pane -->
              			<div class="tab-pane" id="tab_2">
               				<ul class="nav-tabs-custom">
                				<li class=" active">اسم العقار</li>
		              			<li class="pull-right1">اضيف في</li>
		              			</ul>
                				@foreach($userbuw as $userbucone)
                					<li><a href="{{ url('/adminpanal/bu/edit/' . $userbucone->id) }}">{{ $userbucone->bu_name }}</a><span class="created_at"> {{ $userbucone->created_at }}</span></li>
                				@endforeach
                			</ul>
          				</div>
              			<!-- /.tab-pane -->
            		</div>
            	<!-- /.tab-content -->
          		</div>
			</div>
		</div>
		
	</section>
@endsection