<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //
public function list_category(){
$categories=Category::paginate(6);
return view('admin.category.list_category')->with('categories',$categories);
}


public function add_category_save(Request $request){
$category=new Category();
$category->category_name = $request->input('category_name');
$category->save();
return redirect('/list_category')->with('status','La  catégorie'.$category->category_name.'     à été ajouté ');
}

public function delete_category($id){
$category=Category::find($id);
$category->delete();
return redirect('/list_category')->with('status','La catégorie'.$category->citegory_name.'       à été supprimé');                                                                 }
}
