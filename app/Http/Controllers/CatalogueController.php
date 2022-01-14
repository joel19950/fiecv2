<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogue;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Category;

use App\Models\City;
use App\Models\Slider;




class CatalogueController extends Controller
{
    //retourner les catalogues
public function list_catalogue(){

//add information database
$products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
        $cities=City::orderBy('id','DESC')->get();
        $categories=Category::orderBy('id','DESC')->get();
        $catalogues=Catalogue::orderBy('id','DESC')->get();
        $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
        $shops=Shop::orderBy('id','DESC')->get();
//end information database




$catalogues=Catalogue::paginate(3);
return view('admin.catalogue.list_catalogue')

//get information database
->with('products',$products)->with('cities',$cities)
->with('categories',$categories)->with('catalogues',$catalogues)
->with('sliders',$sliders)->with('shops',$shops);
//end to get information database 
}


public function add_catalogue_save(Request $request){
//add information database
$products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
        $cities=City::orderBy('id','DESC')->get();
        $categories=Category::orderBy('id','DESC')->get();
        $catalogues=Catalogue::orderBy('id','DESC')->get();
        $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
        $shops=Shop::orderBy('id','DESC')->get();
//end information database    

$catalogue= new Catalogue();
$catalogue->catalogue_name = $request->input('catalogue_name');
$catalogue->save();
return redirect('/list_catalogue')->with('status','Le catlogue '.$catalogue->catalogue_name.'à été ajouté ')


//get information database
->with('products',$products)->with('cities',$cities)
->with('categories',$categories)->with('catalogues',$catalogues)
->with('sliders',$sliders)->with('shops',$shops);
//end to get information database 

}

public function delete_catalogue($id){
$catalogue=Catalogue::find($id);
$catalogue->delete();
return redirect('/list_catalogue')->with('status','Le catalogue'.$catalogue->catalogue_name.' à été supprimé');
                                                                   }

}
