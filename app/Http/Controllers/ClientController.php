<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
     public $hidden = false;
   
     public function home(){
        $products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
        $cities=City::orderBy('id','DESC')->get();
        $categories=Category::orderBy('id','DESC')->get();
        $catalogues=Catalogue::orderBy('id','DESC')->get();
        $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
        $shops=Shop::orderBy('id','DESC')->get();
    

        return view('client.home')
        ->with('products',$products)->with('cities',$cities)
        ->with('categories',$categories)->with('catalogues',$catalogues)
        ->with('sliders',$sliders)->with('shops',$shops);
        
        }
     public function aboutus(){
        $products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
        $cities=City::orderBy('id','DESC')->get();
        $categories=Category::orderBy('id','DESC')->get();
        $catalogues=Catalogue::orderBy('id','DESC')->get();
        $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
        $shops=Shop::orderBy('id','DESC')->get();


        return view('client.aboutus')
        ->with('products',$products)->with('cities',$cities)
        ->with('categories',$categories)->with('catalogues',$catalogues)
        ->with('sliders',$sliders)->with('shops',$shops);
    }
    public function product_detail(){
        $products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
        $cities=City::orderBy('id','DESC')->get();
        $categories=Category::orderBy('id','DESC')->get();
        $catalogues=Catalogue::orderBy('id','DESC')->get();
        $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
        $shops=Shop::orderBy('id','DESC')->get();


        return view('client.product_detail')
        ->with('products',$products)->with('cities',$cities)
        ->with('categories',$categories)->with('catalogues',$catalogues)
        ->with('sliders',$sliders)->with('shops',$shops);
    }
    public function products(){
        $products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
        $cities=City::orderBy('id','DESC')->get();
        $categories=Category::orderBy('id','DESC')->get();
        $catalogues=Catalogue::orderBy('id','DESC')->get();
        $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
        $shops=Shop::orderBy('id','DESC')->get();

        return view('client.products')
        ->with('products',$products)->with('cities',$cities)
        ->with('categories',$categories)->with('catalogues',$catalogues)
        ->with('sliders',$sliders)->with('shops',$shops);
    }

    public function contact(){
        $products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
        $cities=City::orderBy('id','DESC')->get();
        $categories=Category::orderBy('id','DESC')->get();
        $catalogues=Catalogue::orderBy('id','DESC')->get();
        $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
        $shops=Shop::orderBy('id','DESC')->get();

        return view('client.contact')
        ->with('products',$products)->with('cities',$cities)
        ->with('categories',$categories)->with('catalogues',$catalogues)
        ->with('sliders',$sliders)->with('shops',$shops);
    }
    public function search(){
        $products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
        $cities=City::orderBy('id','DESC')->get();
        $categories=Category::orderBy('id','DESC')->get();
        $catalogues=Catalogue::orderBy('id','DESC')->get();
        $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
        $shops=Shop::orderBy('id','DESC')->get();
        return view('client.search')
        ->with('products',$products)->with('cities',$cities)
        ->with('categories',$categories)->with('catalogues',$catalogues)
        ->with('sliders',$sliders)->with('shops',$shops);
    }
}
