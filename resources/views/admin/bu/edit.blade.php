@extends('admin.layouts.layout')

@section('title','تعديل عقار')


@section('content')
	<section class="content-header">
		<h2>تعديل عقار</h2>
		<ol class="breadcrumb">
          <li><a href="{{ url('/') }}"><i class="fa1 fa1-dashboard"></i> الرئسية </a></li>
          <li><a href="{{ url('/adminpanal/bu/index') }}"><i class="fa1 fa1-home"></i> لوحة تحكم العقارات</a></li>    
           <li><a href="{{ url('/adminpanal/bu/create') }}"><i class="c fa1-plus"></i> اضافة عقار جديد </a></li>
        
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
					<h2>
						تعديل عقار
					</h2>
					
				</div>
				<div class="box-body">
					@include('admin.bu.formedit')
				</div>
			</div>
			</div>
		
	</section>
	<hr style="margin: 30px 10px;border:1px solid #efcf34;">

@endsection