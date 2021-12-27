<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Product;
class ProductController extends Controller
{
    //
//enregistrer un products dans ma base de donnée
public function add_product_save(Request $request)
{
    $this->validate(
        $request,
        [
            'product_price' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
        
            'product_image' => 'required',
            'product_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048'

        ]
    );



     if ($request->hasFile('product_image')) {
        //1 get file name with extension
       
        foreach ($request->file('product_image') as $image) {
            $name = $image->getClientOriginalName();
            $image->move(public_path() . '/public_images/', $name);
            $data[] = $name;
        }
    } else {
        ///  $fileNameToStore = 'noimage.jpg';
        $data = '["noimage.jpg"]';
    }

    $product = new Product();
    $product->product_name = $request->input('product_name');
    $product->product_description = $request->input('product_description');
    $product->product_price = $request->input('product_price');
    $product->category_id = $request->input('category_id');
    $product->catalogue_id= $request->input('catalogue_id');
    $product->shop_id= $request->input('shop_id');
    $product->product_city = $request->input('product_city');
    $product->product_status = $request->input('product_status');
    $product->product_image = json_encode($data);
    $product->product_status = 1;

  
        $product->save();
        Toastr::success("le product ' . $product->product_name . ' a été ajouter avec succes :)", 'Success');
        return redirect()->back();
    
    
}


public function delete_product($id)
{
    $product = Product::find($id);

    if ($product != null) {
        if ($product->product_image != 'noimage.jpg') {
            foreach (json_decode($product->product_image) as $img) {
                Storage::delete('/public_images/' . $img);
            }
        }
    } else {
        Toastr::error("Cet élément a déjà été supprimé:)", 'Error');
        return back();
    }



    $product->delete();
    Toastr::success("Le product a été supprimer avec succès :)", 'success');
    return back();
}



public function list_product(){
    $products=Product::orderBy('id','DESC')->paginate(6);
     return view('admin.product.list_product')->with('products',$products);
}

public function desactiverproduct($id)
    {
        $product = Product::find($id);
        $product->product_status = 0;
        $product->update();
        Toastr::warning("Le product a été désactiver avec succès :)", 'Warning');
        return back();
    }


    public function activerproduct($id)
    {
        $product = Product::find($id);
        $product->product_status = 1;
        $product->update();
        Toastr::success("Le product a été activer  avec succès :)", 'success');
        return back();
    }


    public function update_product_save(Request $request)
    {
       


        $this->validate(
            $request,
            [
                'product_name' => 'required',
                'product_description' => 'required',
                'product_category' => 'required',
                'product_price' => 'required',
                'product_image' => 'required',
                'product_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048'

            ]
        );


        if ($request->hasFile('product_image')) {

            foreach ($request->file('product_image') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/public_images/', $name);
                $data[] = $name;
            }
        } else {
            $data = '["noimage.jpg"]';
        }
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_price = $request->input('product_price');
        $product->category_id = $request->input('category_id');
        $product->catalogue_id= $request->input('catalogue_id');
        $product->product_city = $request->input('product_city');
        $product->product_status = $request->input('product_status');
        $product->product_image = json_encode($data);
        $product->product_status = 1;

        $product->update();
        Toastr::success("Le product a été modifier avec succès :)", 'success');
        return redirect('/list_product');
    }



public function add_product(){
    return view('admin.product.add_product');
}

public function detail_product($id){
    $product=Product::find($id);
    return view('client.detail_product')->with('product', $product);
}

}
