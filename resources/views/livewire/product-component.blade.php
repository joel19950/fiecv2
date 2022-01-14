<div>
    <div class="content-top1" style="text-align: center">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" wire:model="filter">
            <label class="form-check-label" for="flexCheckDefault">
                Trier
            </label>
        </div>
       </div>
       


       @if($hidden)
       <div class="content-top1">
        <form>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <select class="form-control" wire:model="city">
                            
                                <option value="">-- Ville --</option>
                           @forelse ($cities as $city)
                           <option value="{{ $city->city_name}}">{{ $city->city_name}} </option>
                           @empty
                                 <option>-- Aucune -- </option>
                           @endforelse   
                            

                        </select>
                    </div>
                </div>
                <div class="col-sm-4">     
                    <div class="form-group">
                        <select class="form-control" wire:model="category">

                            <option value="">-- Catégorie --</option>
                            @forelse ($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->category_name}} </option>
                            @empty
                                  <option>-- Aucune -- </option>
                            @endforelse 

                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <select class="form-control" wire:model="catalogue">

                           <option value="">-- Catalogue --</option>
                            @forelse ($catalogues as $catalogue)
                            <option value="{{ $catalogue->id}}">{{ $catalogue->catalogue_name}} </option>
                            @empty
                                  <option>-- Aucune-- </option>
                            @endforelse 

                        </select>
                    </div>
                </div>

            </div>
        </form>
    </div> 
       @endif

       
        <div class="content-top">
            <h1>{{__('Produits recents')}} </h1>
            

            <!---728x90--->
            <div class="content-top1">

                @forelse ($products as $product)
                    <div class="col-md-3 col-md2">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="{{ url('/detail_product/' . $product->id) }}" style="text-align: center">
                                <img class="img-responsive"
                                    src="/public_images/{{ json_decode($product->product_image)['0'] }}">
                            </a>
                            <h3><a href="{{ url('/detail_product/' . $product->id) }}">{{ $product->product_name }}</a>
                            </h3>
                            <div class="price">
                                <h5 class="item_price">{{ $product->product_price }} Fcfa</h5>
                                <a href="{{ url('/detail_product/' . $product->id) }}" class="item_add"> {{__('Voir')}}</a>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-md-3 col-md2">
                        <div style="text-align: center"> {{__('Aucun produit')}} </div>
                    </div>
                @endforelse
                
                <div class="clearfix"> </div>
            </div>
        </div>

</div>
