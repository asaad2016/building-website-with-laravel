@if(count($samerent) > 0)
	<h2 class="text-center" style="margin-bottom: 20px;background-color: #fff;text-align: center;">نوع العملية</h2>
	
		@foreach($samerent as $showall)
		 <div class="col-sm-4 text-center">
			<article class="col-item">
				<div class="photo">
					<a href="#"> <img src="/admin/img/{{$showall->image }}" class="img-responsive" alt="Product Image" /> </a>
				</div>
				<div class="info">		
					<div class="price-details col-md-6" >
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
							<a href="#" class="hidden-sm" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-exchange"></i></a>
						</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</article>
		</div>



@endforeach
	
@endif
<div class="clearfix" ></div>
@if(count($butype) > 0)

	<h2 class="text-center" style="margin-bottom: 20px;background-color: #fff;text-align: center;">نوع العقار</h2>
	
		@foreach($butype as $type)

		<div class="col-sm-4 text-center" style="padding-bottom: 10px">
			<article class="col-item">
				<div class="photo">
					<a href="#"> <img ssrc="/admin/img/{{$showall->image }}" class="img-responsive" alt="Product Image" /> </a>
				</div>
				<div class="info">		
					<div class="price-details col-md-6">
						<p class="details">
							{{ str_limit($type->bu_small_dis,50) }}
						</p>
						<h1><a href="{{ url('/single/' . $showall->id) }}">{{ $type->bu_meta }} </a></h1>
						<span class="price-new">{{ $type->bu_price }}</span>
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
		</div>
		@endforeach
	
@endif