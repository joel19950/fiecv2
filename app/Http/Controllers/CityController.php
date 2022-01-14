<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Category;
use App\Models\Catalogue;

use App\Models\Slider;
class CityController extends Controller
{

public function list_city(){
//add information database
$products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
$cities=City::orderBy('id','DESC')->get();
$categories=Category::orderBy('id','DESC')->get();
$catalogues=Catalogue::orderBy('id','DESC')->get();
$sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
$shops=Shop::orderBy('id','DESC')->get();
//end information database




    $cities=City::orderBy('id', 'DESC')->get();
    return view('admin.city.list_city')
    
    //get information database
    ->with('products',$products)->with('cities',$cities)
    ->with('categories',$categories)->with('catalogues',$catalogues)
    ->with('sliders',$sliders)->with('shops',$shops);
    //end to get information database 
}


public function add_city_save(Request $request){ 
    //add information database
    $products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
    $cities=City::orderBy('id','DESC')->get();
    $categories=Category::orderBy('id','DESC')->get();
    $catalogues=Catalogue::orderBy('id','DESC')->get();
    $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
    $shops=Shop::orderBy('id','DESC')->get();
    //end information database



    $city=new City();     
    $city->city_name = $request->input('city_name');
    $city->save();
    return redirect('/list_city')->with('status','La ville '.$city->city_name.'  à été ajouté')
    
    //get information database
    ->with('products',$products)->with('cities',$cities)
    ->with('categories',$categories)->with('catalogues',$catalogues)
    ->with('sliders',$sliders)->with('shops',$shops);
    //end to get information database 
    
                                            }

public function delete_city($id){
    $city=City::find($id);
    $city->delete();
    return redirect('/list_city')->with('status','La ville  '.$city->city_name.'       à été supprimé');
                         }

   
}
