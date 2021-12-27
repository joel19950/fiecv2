<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Category;
use App\Models\Catalogue;
use App\Models\City;
use App\Models\Slider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
       $products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
        $cities=City::orderBy('id','DESC')->get();
        $categories=Category::orderBy('id','DESC')->get();
        $catalogues=Catalogue::orderBy('id','DESC')->get();
        $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
        $shops=Shop::orderBy('id','DESC')->get();
    

        View::share('categories', $categories);
        View::share('cities', $cities);
        View::share('products', $products);
        View::share('sliders', $sliders);
        View::share('shops', $shops);
        View::share('catalogues', $catalogues);
    }
}
