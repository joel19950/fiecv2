<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeLanguageController extends Controller
{
    //
public function language($locale) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
     //redirect()->back();
    
}
}
