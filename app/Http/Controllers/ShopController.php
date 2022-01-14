<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Product;
use App\Models\Category;
use App\Models\Catalogue;
use App\Models\City;
use App\Models\Slider;
class ShopController extends Controller
{
    //
        //
public function list_shop(){
//add information database
$products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
$cities=City::orderBy('id','DESC')->get();
$categories=Category::orderBy('id','DESC')->get();
$catalogues=Catalogue::orderBy('id','DESC')->get();
$sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
$shops=Shop::orderBy('id','DESC')->get();
//end information database


    $shops=Shop::orderBy('id', 'DESC')->get();
    return view('admin.shop.list_shop')
    
    //get information database
    ->with('products',$products)->with('cities',$cities)
    ->with('categories',$categories)->with('catalogues',$catalogues)
    ->with('sliders',$sliders)->with('shops',$shops);
    //end to get information database 
}


public function add_shop_save(Request $request){
    //add information database
$products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
$cities=City::orderBy('id','DESC')->get();
$categories=Category::orderBy('id','DESC')->get();
$catalogues=Catalogue::orderBy('id','DESC')->get();
$sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
$shops=Shop::orderBy('id','DESC')->get();
//end information database
    


    $shop=new Shop();     
    $shop->shop_name = $request->input('shop_name');
    $shop->city_id = $request->input('city_id');
    $shop->shop_description = $request->input('shop_description');
    $shop->save();
    return redirect('list_shop')->with('status','La ville   '.$shop->shop_name.'       à été ajouté')
    
    //get information database
    ->with('products',$products)->with('cities',$cities)
    ->with('categories',$categories)->with('catalogues',$catalogues)
    ->with('sliders',$sliders)->with('shops',$shops);
    //end to get information database 
    
                                            }

public function delete_shop($id){
    $shop=Shop::find($id);
    $shop->delete();
    return redirect('/list_shop')->with('status','La ville  '.$shop->shop_name.'       à été supprimé');
                         }
}
