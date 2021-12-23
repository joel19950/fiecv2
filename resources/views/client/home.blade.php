@extends('client.layouts.clientlayout')
@section('content')
  <!--banner-->
<div class="banner">
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive"	src="{{asset('images/ba1.jpg')}}" alt="">
	</div>
	<div class="col-sm-6 matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<img src="{{asset('images/1.jpg')}}" alt="">
	       			 </li>
			 		 <li>
	          			<img src="{{asset('images/2.jpg')}}" alt="">   
	       			 </li>
					 <li>
	          			<img src="{{asset('images/1.jpg')}}" alt="">
	        		</li>	
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive" src="{{asset('images/ba.jpg')}}" alt="">
	</div>
	<div class="clearfix"> </div>
</div>
<!--//banner-->
<!---728x90--->

<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Produits recents</h1>
				
			<!---728x90--->
			<div class="content-top1">
				<div class="col-md-3 col-md2">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{asset('images/pi3.png')}}" alt="" />
						</a>
						<h3><a href="single.html">Shirt</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{asset('images/pi5.png')}}" alt="" />
						</a>
						<h3><a href="single.html">T-Shirt</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
				<div class="clearfix"> </div>
			</div>	
		</div>
	</div>
</div>
<!--//content-->
<!---728x90--->  
@endsection



