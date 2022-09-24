@extends('admin.layouts.layout')
@section('title','تعديل بيانات الرسالة')


@section('content')
		<section class="content-header">
	
		<h2>تعديل رسالة جديدة</h2>
		<ol class="breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئسية </a></li>
          <li><a href="{{ url('/adminpanal/message/index') }}"><i class="fa fa-home"></i> لوحة تحكم الرسائل</a></li>    
           <li><a href="{{ url('/adminpanal/user/create') }}"><i class="fa fa-plus"></i> تعديل رسالة جديدة </a></li>
        
        </ol>
	</section>
	<section class="content"  style="background-color: #fff; padding: 10px 20px 30px;border:1px solid #ddd;">
		<div class="row">
			<div class="col-sm-12">
				<div class="box-header">
					<h2>
						تعديل الرسالة
					</h2>
					
				</div>
				<div class="box-body">
					@include('admin.message.formedit')
				</div>
			</div>
			</div>
		
	</section>
@endsection