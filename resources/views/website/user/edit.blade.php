@extends('layouts.app')
@section('title','تعديل بيانات عضو')


@section('content')
	<section class="content-header">
		<h2>تعديل بيانات عضو</h2>
		<ol class="breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئسية </a></li>        
        </ol>
	</section>
	<section class="content-header text-center">
		@if(Session::has('msg'))
			 <div class="alert alert-danger">
			 	{{	Session::get('msg')	}}
			 </div>
		 @endif
	</section>
	<section class="content"  style="background-color: #fff; padding: 10px 20px 30px;border:1px solid #ddd;">
		<div class="row">
			<div class="col-sm-12">
				<div class="box-header">
					<h2>
						تعديل عضو جديد
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
					{!! Form::open(['url'=>'changepass','method'=>'post']) !!}
					 <input type="hidden" class="form-control" name="userid" value="{{ $user->id }}">
					    <div class="text2" style="margin-bottom: 15px">
						  	<input  type="password" class="form-control" name="oldpassword" placeholder="كلمة المرور القديمة">
						  	 
						</div>
			  			<div class="text2" style="margin-bottom: 15px">
						  	<input  type="password" class="form-control" name="password" placeholder="تغير كلمة المرور">
						  	 
						</div
					    <div style="margin-bottom: 15px">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i> تاكيد كلمة السر
                            </button>
			  			</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		
	</section>
@endsection