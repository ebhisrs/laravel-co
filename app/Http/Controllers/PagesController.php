<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function careers(){
        return view('pages.careers');
    }
    public function accountforms(){
        return view('pages.account-forms');
    }
    
    public function trading(){
        return view('pages.trading');
    }
    
    public function metals(){
        return view('pages.metals');
    }
    public function cfds(){
        return view('pages.cfds');
    }
    public function cryptocurrencies(){
        return view('pages.cryptocurrencies');
    }
    public function accounts(){
        return view('pages.accounts');
    }
    
    public function openaccount(){
        return view('pages.open-a-corporate-account');
    }
    public function gold(){
        return view('pages.gold');
    }

    public function calculator(){
        return view('pages.calculator');
    }
}
