@extends('admin.layouts.layout')
@section('title')
اضافة عقار جديد
@endsection
@section('content')
	<section class="content-header">
		<h1>
        	<small>اضافة عقار جديد</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> الرئسية </a></li>
          <li><a href="{{ url('/adminpanal/bu/index') }}"><i class="fa fa-home"></i> لوحة تحكم العقارات</a></li>    
           <li><a href="{{ url('/adminpanal/bu/create') }}"><i class="fa fa-plus"></i> اضافة عقار جديد </a></li>
        
        </ol>
	</section>
	<section class="content"  style="background-color: #fff; padding: 10px 20px 30px;border:1px solid #ddd;">
		<section>
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					<ul class="list-unstyled" 
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
			
		</section>
		<div class="row">
			<div class="col-sm-12">
				<div class="box-header">
					<h3 class="box-title">
						اضافة عقار جديد
					</h3>
					
				</div>
				<div class="box-body">
					@include('admin.bu.form')
				</div>
			</div>
			</div>
		</div>
	</section>

@endsection