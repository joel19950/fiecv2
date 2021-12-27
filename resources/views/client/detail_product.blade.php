@extends('client.layouts.clientlayout')
@section('content') 
<div class="single">

    <div class="container">
    <div class="col-md-9">
        <div class="col-md-5 grid">		
            <div class="flexslider">

                  <ul class="slides">

                    @foreach(json_decode($product->product_image) as $image)
                    
                    <li data-thumb=" {{asset('/public_images/'.$image ?? '/public_images/ noimage.jpg' )}}">
                        <div class="thumb-image"> <img src=" {{asset('/public_images/'.$image ?? '/public_images/ noimage.jpg' )}}" data-imagezoom="true" class="img-responsive"> </div>
                    </li>

                    @endforeach	
                  </ul> 

            </div>
        </div>	
    <div class="col-md-7 single-top-in">
                            <div class="single-para simpleCart_shelfItem">
                                <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h1>
                                <p>Contrary to popular belf, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                <div class="star-on">
                                    <ul>
                                        <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#"> 3 reviews </a>/
                                        <a href="#">  Write a review</a>
                                    </div>
                                <div class="clearfix"> </div>
                                </div>
                                
                                    <label  class="add-to item_price">$32.8</label>
                                
                                <div class="available">
                                    <h6>Available Options :</h6>
                                    <ul>
                                        
                                    <li>Size:<select>
                                        <option>Large</option>
                                        <option>Medium</option>
                                        <option>small</option>
                                        <option>Large</option>
                                        <option>small</option>
                                    </select></li>
                                    <li>Cost:
                                            <select>
                                            <option>U.S.Dollar</option>
                                            <option>Euro</option>
                                        </select></li>
                                </ul>
                            </div>
                                    <a href="#" class="cart item_add">More details</a>
                            </div>
                        </div>
                <div class="clearfix"> </div>
                <!---728x90--->		
                <div class="content-top1">
                    	
                	@forelse ($prods as $prod)
                    <div class="col-md-4 col-md3">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="{{url('/detail_product/'.$prod->id)}}">
                                <img class="img-responsive" src="/public_images/{{json_decode($prod->product_image)['0']}}" alt="" />
                            </a>
                            <h3><a href="{{url('/detail_product/'.$prod->id)}}">{{$prod->product_name}}</a></h3>
                            <div class="price">
                                    <h5 class="item_price">{{$prod->product_price}}</h5>
                                    <a href="{{url('/detail_product/'.$prod->id)}}" class="item_add">Voir</a>
                                    <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                 </div>  
                    @empty
                        Aucun autre produit appartient a cette catégories
                    @endforelse
               	
                
                <div class="clearfix"> </div>
                </div>		
    </div>
    <!----->
    <div class="col-md-3 product-bottom">
                <!--categories-->
                    <div class=" rsidebar span_1_of_left">
                            <h3 class="cate">Catégories</h3>
                                 <ul class="menu-drop">
                                @forelse ($cates as $cat)
                                <li class="item4"><a href="#">{{$cat->category_name}}</a></li>
                                @empty
                                    Aucune Catégories lié
                                @endforelse
                                   
                                </ul>
                        </div>
                    <!--initiate accordion-->
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
    <!--//menu-->
    <!--seller-->
                    <div class="product-bottom">
                            <h3 class="cate">Autre produits</h3>
                        
                        
                       	@forelse ($prods as $prod)
                               
                           
                        <div class="product-go">
                            <div class=" fashion-grid">
                                <a href="single.html"><img class="img-responsive " src="/public_images/{{json_decode($prod->product_image)['0']}}" alt=""></a>	
                            </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="single.html" >{{$prod->product_name }} </a></h6>
                                <span class=" price-in1"> {{$prod->product_price}}</span>
                            </div>	
                            <div class="clearfix"> </div>
                        </div>
                        @empty
                               <div> Aucun autre produits</div>
                           @endforelse
                        

                    </div>
    
    <!--//seller-->
    <!--tag-->
                    
            </div>
            <div class="clearfix"> </div>
        </div>
        </div>
        <!---728x90--->	

 @endsection 