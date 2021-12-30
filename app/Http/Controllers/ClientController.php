<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
     public $hidden = false;
   
     public function home(){
        return view('client.home');
        
        }
     public function aboutus(){
        return view('client.aboutus');
    }
    public function product_detail(){
        return view('client.product_detail');
    }
    public function products(){
        return view('client.products');
    }

    public function contact(){
        return view('client.contact');
    }
    public function search(){
        return view('client.search');
    }
}
