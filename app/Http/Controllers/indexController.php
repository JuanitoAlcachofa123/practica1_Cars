<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('principal.index');
    }
    public function login(){
        return view('principal.login');
    
    }
    
    public function informacion(){
        return view('principal.informacion');

    }

    public function contactanos(){
        return view('principal.contactanos');

    }

    public function sobre_nosotros(){
        return view('principal.sobre_nosotros');

    }
}
