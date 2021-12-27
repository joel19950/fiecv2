@extends('client.layouts.clientlayout')
@section('content')
    <!--content-->
    <!---728x90--->

    <div class="products">
        <div class="container">
            <h1>Produits</h1>
            <div class="col-md-9">
                <div class="content-top1">
                   
                  @forelse ($products as $product)
                   <div class="col-md-4 col-md3">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="{{ url('/detail_product/' . $product->id) }}">
                            <img class="img-responsive"  src="/public_images/{{ json_decode($product->product_image)['0'] }}" alt="" />
                        </a>
                        <h3><a href="{{ url('/detail_product/' . $product->id) }}">{{$product->product_name}}</a></h3>
                        <div class="price">
                            <h5 class="item_price">{{$product->product_price}}</h5>
                            <a  href="{{ url('/detail_product/' . $product->id) }}" class="item_add">Voir</a>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>
                  @empty
                      <div style="text-align: center">Aucun produit</div>
                  @endforelse
                   

                    <div class="clearfix"> </div>
                </div>
                
            </div>
            <div class="col-md-3 product-bottom">
                <!--categories-->
                <div class=" rsidebar span_1_of_left">
                    <h3 class="cate">Catégories</h3>
                    <ul class="menu-drop">
                        @forelse ($categories as $category)
                        <li class="item1"><a href="#">{{$category->category_name}} </a></li>
                        @empty
                        <li class="item1"><a href="#">Aucun produit </a></li>
                        @endforelse
                       
                    
                    </ul>
                </div>
                <!--initiate accordion-->
                <script type="text/javascript">
                    $(function() {
                        var menu_ul = $('.menu-drop > li > ul'),
                            menu_a = $('.menu-drop > li > a');
                        menu_ul.hide();
                        menu_a.click(function(e) {
                            e.preventDefault();
                            if (!$(this).hasClass('active')) {
                                menu_a.removeClass('active');
                                menu_ul.filter(':visible').slideUp('normal');
                                $(this).addClass('active').next().stop(true, true).slideDown('normal');
                            } else {
                                $(this).removeClass('active');
                                $(this).next().stop(true, true).slideUp('normal');
                            }
                        });

                    });
                </script>
                <!--//menu-->
                <!--seller-->
                <div class="product-bottom">
                    <h3 class="cate">Autres produits</h3>
                    @forelse ($products as $product)
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="{{ url('/detail_product/' . $product->id) }}"><img class="img-responsive " src="/public_images/{{ json_decode($product->product_image)['0'] }}" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="{{ url('/detail_product/' . $product->id) }}">{{$product->product_description}} </a>
                            </h6>
                            <span class=" price-in1"> {{$product->product_price}} Fcfa</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>  
                    @empty
                        <div style="text-align: center">Aucun produit </div>
                    @endforelse
                   
                   
                    
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//content-->

@endsection
