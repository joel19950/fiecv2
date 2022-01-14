<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogue;
class CatalogueController extends Controller
{
    //retourner les catalogues
public function list_catalogue(){
$catalogues=Catalogue::paginate(3);
return view('admin.catalogue.list_catalogue')
->with('catalogues',$catalogues);
}


public function add_catalogue_save(Request $request){

$catalogue= new Catalogue();
$catalogue->catalogue_name = $request->input('catalogue_name');
$catalogue->save();
return redirect('/list_catalogue')->with('status','Le catlogue '.$catalogue->catalogue_name.'à été ajouté ');
                                            }
public function delete_catalogue($id){
$catalogue=Catalogue::find($id);
$catalogue->delete();
return redirect('/list_catalogue')->with('status','Le catalogue'.$catalogue->catalogue_name.' à été supprimé');
                                                                   }

}
