
<!DOCTYPE html>
<html>
<head>
<title>  {{__('Accueil')}} </title>
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<link rel="stylesheet" href="{{ asset('backend/themify-icons.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<link href="{{asset('css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('js/memenu.js')}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="{{asset('js/simpleCart.min.js')}}"> </script>
<!-- slide -->
<script src="{{asset('js/responsiveslides.min.js')}}"></script>

   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
<script src="{{asset('//m.servedby-buysellads.com/monetization.js')}}" type="text/javascript"></script>
<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="{{asset('//assests/css/font-awesome.min.css')}}">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>
<div class="pull-right toggle-right-sidebar">
<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
</div>

</div>

<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
	
				<div class="col-sm-4 logo">
					<a href="{{URL::to('/')}}"><img src="{{asset('images/logo.jpg')}}" alt="" height="100px" width="75px"></a>	
				</div>
		
			<div class="col-sm-4 header-left">	
				 	
					<p class="log"><a href="account.html"> <img src="{{asset('images/france.png')}}" height="12px" width="18px"></a>
						<span>ou</span><a  href="account.html"> <img src="{{asset('images/anglais.jpg')}}" height="12px" width="18px"> </a></p>
			
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="col-sm-2 number">
					<span><i class="glyphicon glyphicon-phone"></i> 676 471 717</span>
				</div>
		 <div class="col-sm-8 h_menu4">
				<ul class="memenu skyblue">
					<li class=" grid"><a  href="{{URL::to('/')}}"> {{__('Accueil')}}</a></li>	
				    <li><a  href="{{URL::to('/aboutus')}}"> {{__('A propos')}}</a></li>
				    <li class="grid"><a  href="{{URL::to('/products')}}">{{__('Produits')}} </a> </li>
					<li><a class="color6" href="{{URL::to('/contact')}}"> {{__('Contact')}}</a></li>
			  	</ul> 
			</div>
				<div class="col-sm-2 search">		
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
		</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
					  <script type="text/javascript" src="{{asset('js/modernizr.custom.min.js')}}"></script>    
					<link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all"/>
					<script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<form action="{{url('/search')}}" method="get">
								@csrf
								{{-- <input type="submit" value=""> --}}
								<input type="text" name="search" value="Rechercher..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							 	<p>	<button type="submit" class="btn btn-success"> {{__('recherche')}} </button></p>
							</form>
						</div>
						
					</div>				
				</div>
				
				<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>



@yield('content')



<!--footer-->
 <div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-8 top-footer">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.91163207516!2d2.3470599!3d48.85885894999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1436340519910" allowfullscreen=""></iframe>
			</div>
			<div class="col-md-4 top-footer1">
				<h2> {{__('Newsletter')}}</h2>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE">
					</form>
			</div>
			<div class="clearfix"> </div>	
		</div>	
	</div>
	<div class="footer-bottom">
		<div class="container">
				<div class="col-sm-3 footer-bottom-cate">
					<h6> {{__('Catégories')}}</h6>
					<ul style="font-size: 20px">
						@forelse ($categories as $category)
						<li><a href="#">{{$category->category_name}}</a></li>
						@empty
						<li>  {{__('Aucune catégorie')}} </li>	  
						@endforelse
						
						
					</ul>
				</div>
				<div class="col-sm-3 footer-bottom-cate">
					<h6> {{__('Contact info')}}</h6>
					<ul style="font-size: 20px">
						
						<li><a href="#"> {{__('LT Cameroun, Douala')}}</a></li>
						<li><a href="#"> {{__('Tel: +237 676 471 717')}}</a></li>
						<li><a href="#">{{__('Email: contact@promo24.com ')}}</a></li>
						
					</ul>
				</div>
				<div class="col-sm-3 footer-bottom-cate">
					<h6> {{__('Villes')}}</h6>
					<ul style="font-size: 20px">
						<li><a href="#"> {{__('Douala')}}</a></li>
						<li><a href="#"> {{__('Yaoundé')}} </a></li>
						<li><a href="#"> {{__('Bafoussam')}}</a></li>
						
					</ul>
				</div>
				<div class="col-sm-3 footer-bottom-cate cate-bottom">
					<h6> {{__('Média social')}}</h6>
					<ul>
					<li style="font-size: 25px">
						<a href="#"> <i class="ti-linkedin"> </i> </a>
						<a href="#"> <i class="ti-facebook"> </i> </a>
						<a href="#"> <i class="ti-instagram"> </i></a>
						<a href="#"> <i class="ti-twitter"> </i></a>
						
					</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class"> © 2021 promo24.  {{__('Tous droits réservés')}}| <a href="https://www.linkedin.com/in/jo%C3%ABl-tchoufa-143334183" target="_blank">jnt</a> </p>
			</div>
	</div>
</div>

<!--//footer-->























						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all"/>
					<script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	













</body>
</html>