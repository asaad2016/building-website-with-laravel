@if(count($bu) > 0)
@foreach($bu as $showall)

 <div class="col-sm-3 text-center">
	<article class="col-item">
		<div class="photo">
			<a href="#"> <img src="/admin/img/{{$showall->image }}" alt="Product Image" /> </a>
		</div>
		<div class="info">
			
				<div class="price-details col-md-6">
					<p class="details">
						{{ str_limit($showall->bu_small_dis,50) }}
					</p>
					<h1><a href="{{ url('/single/' . $showall->id) }}">{{ $showall->bu_meta }} </a></h1>
					<span class="price-new">{{ $showall->bu_price }}</span>
				</div>
			
			<div class="separator clear-left">
				<p class="btn-add">
					<i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
				</p>
				<p class="btn-details">
					<a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Add to wish list"><i class="fa fa-heart"></i></a>
					@if(isset($edit))
						<a href="{{ url('/bu/edit/' . $showall->id) }}" class="hidden-sm"><i class="fa fa-edit"></i>Edit</a>
					@else
						<a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-exchange"></i></a>
					@endif
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</article>
</div>


@endforeach
@else
 <div class="col-sm-12">
	<article class="col-item">
		<div class="info">
			
				<div class="price-details col-md-6 text-center">
					<div class="alert alert-danger">
						<span style="float: none;">عذرا لا يوجد عقارات</span>
					</div>
				</div>
			
			
			<div class="clearfix"></div>
		</div>
	</article>
</div>
@endif