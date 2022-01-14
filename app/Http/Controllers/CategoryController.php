<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Shop;
use App\Models\Category;
use App\Models\Catalogue;
use App\Models\City;
use App\Models\Slider;
class CategoryController extends Controller
{
    //

public function list_category(){
//add information database
$products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
$cities=City::orderBy('id','DESC')->get();
$categories=Category::orderBy('id','DESC')->get();
$catalogues=Catalogue::orderBy('id','DESC')->get();
$sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
$shops=Shop::orderBy('id','DESC')->get();
//end information database


$categories=Category::paginate(6);
return view('admin.category.list_category')

//get information database
->with('products',$products)->with('cities',$cities)
->with('categories',$categories)->with('catalogues',$catalogues)
->with('sliders',$sliders)->with('shops',$shops);
//end to get information database 
}


public function add_category_save(Request $request){
//add information database
$products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
$cities=City::orderBy('id','DESC')->get();
$categories=Category::orderBy('id','DESC')->get();
$catalogues=Catalogue::orderBy('id','DESC')->get();
$sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
$shops=Shop::orderBy('id','DESC')->get();
//end information database


$category=new Category();
$category->category_name = $request->input('category_name');
$category->save();
return redirect('/list_category')->with('status','La  catégorie'.$category->category_name.'     à été ajouté ')

//get information database
->with('products',$products)->with('cities',$cities)
->with('categories',$categories)->with('catalogues',$catalogues)
->with('sliders',$sliders)->with('shops',$shops);
//end to get information database 
}

public function delete_category($id){
$category=Category::find($id);
$category->delete();
return redirect('/list_category')->with('status','La catégorie'.$category->citegory_name.'       à été supprimé');                                                                 }
}
