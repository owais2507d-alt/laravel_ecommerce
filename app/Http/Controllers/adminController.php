<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard(){
        return view('Admin.dashboard');
    }

    public function order(){
        return view('Admin.order');
    }
///// innner file in admin foldre 
    public function insert(){
        return view('Admin.products.insert');
    }

    public function edit(){
        return view('Admin.products.edit');
    }

    public function read(){
        return view('Admin.products.read');
    }

    

}
