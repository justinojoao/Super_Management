<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(string $pais, string $regiao){
        return view('site.contact', compact('pais', 'regiao'));//compact
    }
}
