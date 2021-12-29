<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeLanguageController extends Controller
{
    //
public function language($locale) {
        app()->setLocale($locale);
        if($locale=='en'){
        session()->put('locale', $locale);
             }
         if($locale=='fr'){
            session()->put('locale', $locale);
         }  
        return redirect()->back();
     
    
}
}
