<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\City;
use App\Models\Category;
use App\Models\Catalogue;
use App\Models\Product;
class ProductComponent extends Component
{
    public $hidden=false;
    public $filter;
    
    public $city;
    public $category;
    public $catalogue;

   

    public function render()
    {
        
        
    if($this->filter){
            $this->hidden=true;
    }else{
            $this->hidden=false; 
            $this->city="";
            $this->category="";
            $this->catalogue="";
        }
    
        $cities =City::orderBy('id', 'DESC')->get();
        $categories =Category::orderBy('id', 'DESC')->get();
        $catalogues =Catalogue::orderBy('id', 'DESC')->get();

   

    $products = Product::orderBy('id', 'DESC')
        ->where('product_status', 1)
       ->when($this->city, function ($query, $city) {
      //  $this->hidden = true;
        return $query->where('product_city', $city);
      })->when($this->category, function ($query, $category) {
       // $this->hidden = true;
        return $query->where('category_id', $category);

      })->when($this->catalogue, function ($query, $catalogue) { 
        //$this->hidden = true;
        return $query->where('catalogue_id', $catalogue);
      })->get();
         return view('livewire.product-component')
        ->with('hidden',$this->hidden)
        ->with('products', $products)
        ->with('cities', $cities)
        ->with('categories', $categories)
        ->with('catalogues', $catalogues);
    }
}
