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
    public function vps(){
        return view('pages.vps');
    }   
     public function tradingguides(){
        return view('pages.trading-guides');
    }
    public function metatrader4(){
        return view('pages.metatrader4');
    }
    public function metatrader5(){
        return view('pages.metatrader5');
    }
    public function webtrader(){
        return view('pages.webtrader');
    }
    public function mirrortrader(){
        return view('pages.mirror-trader');
    }

    public function fxddmenamobile(){
        return view('pages.fxddmena-mobile');
    }
    public function faq(){
        return view('pages.faq');
    }
    public function glossary(){
        return view('pages.glossary');
    }
    public function economiccalendar(){
        return view('pages.economic-calendar');
    }
    public function mt4one(){
        return view('pages.mt4-one-minute-data');
    }
    public function platforms(){
        return view('pages.platforms');
    }
}
