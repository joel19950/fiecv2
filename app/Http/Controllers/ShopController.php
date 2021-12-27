<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
class ShopController extends Controller
{
    //
        //
public function list_shop(){
    $shops=Shop::orderBy('id', 'DESC')->get();
    return view('admin.shop.list_shop')->with('shops', $shops);
}


public function add_shop_save(Request $request){ 
    $shop=new Shop();     
    $shop->shop_name = $request->input('shop_name');
    $shop->city_id = $request->input('city_id');
    $shop->shop_description = $request->input('shop_description');
    $shop->save();
    return redirect('list_shop')->with('status','La ville   '.$shop->shop_name.'       à été ajouté');
    
                                            }

public function delete_shop($id){
    $shop=Shop::find($id);
    $shop->delete();
    return redirect('/list_shop')->with('status','La ville  '.$shop->shop_name.'       à été supprimé');
                         }
}
