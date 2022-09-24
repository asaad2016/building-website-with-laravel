@extends('admin.layouts.layout')
@section('title')
اضف رسالة جديدة
@endsection
@section('content')'
	<section class="content-header">
	
		<h2>اضافة رسالة جديدة</h2>
		<ol class="breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئسية </a></li>
          <li><a href="{{ url('/adminpanal/message/index') }}"><i class="fa fa-home"></i> لوحة تحكم الرسائل</a></li>    
           <li><a href="{{ url('/adminpanal/user/create') }}"><i class="fa fa-plus"></i> اضافة رسالة جديدة </a></li>
        
        </ol>
	</section>
	<section class="content"  style="background-color: #fff; padding: 10px 20px 30px;border:1px solid #ddd;">
		<div class="row">
			<div class="col-sm-12">
				<div class="box-header">
					<h2>
						اضف رسالة جديدة
					</h2>
					
				</div>
				<div class="box-body">
					@include('admin.message.form')
				</div>
			</div>
			</div>
		</div>
	</section>

@endsection