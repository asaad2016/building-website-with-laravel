@extends('admin.layouts.layout')
@section('title')
اضف عضو جديد
@endsection
@section('content')
	<section class="content-header">
	
		<h2>اضافة عضو جديد</h2>
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
						اضف عضو جديد
					</h2>
					
				</div>
				<div class="box-body">
				  @if(count($errors))
  <div class="alert alert-danger">
  <ul class="list-unstyled">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
  @endif
				@include('admin.user.form')
				</div>
			</div>
			</div>
		</div>
	</section>

@endsection