<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function index(){
        $fornecedores = ['ze','ze',];
        return view('app.providers.index',compact('fornecedores'));
    }
}
