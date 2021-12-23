<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
class CityController extends Controller
{
    //
public function list_city(){
    $cities=City::orderBy('id', 'DESC')->get();
    return view('admin.city.cityList')->with('cities', $cities);
}


public function add_city(Request $request){ 
    $city=new City();     
    $city->city_name = $request->input('city_name');
    $city->save();
    return redirect('list_city')->with('status','La ville   '.$city->city_name.'       à été ajouté');
    
                                            }

public function delete_city($id){
    $city=City::find($id);
    $city->delete();
    return redirect('/list_city')->with('status','La ville  '.$city->city_name.'       à été supprimé');
                         }

   
}
