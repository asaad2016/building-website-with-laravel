<article class="col-item" style="background-color: #F1F3FA">
	<div class="photo">
		<a href="#"> <img src="/admin/img/{{$busingle->image }}" class="img-responsive singleimg"  alt="Product Image" /> </a>
	</div>
	<div class="info">
		
			<div class="price-details col-md-6">
				<p class="details">
					{{ str_limit($busingle->bu_small_dis,50) }}
				</p>
				<h1>{{ $busingle->bu_meta }}</h1>
				<span class="price-new">{{ $busingle->bu_price }}</span>
			</div>
		
		<div class="separator clear-left">
			<p class="btn-add">
				<i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
			</p>
			<p class="btn-details">
				<a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Add to wish list"><i class="fa fa-heart"></i></a>
				<a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-exchange"></i></a>
			</p>
		</div>
		<div class="clearfix"></div>
	</div>
</article>