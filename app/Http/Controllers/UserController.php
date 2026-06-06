<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    
    public function Home(){
        return view('Users.Home');
    }


    public function carts(){
        return view('Users.carts');
    }

    public function orders(){
        return view('Users.orders');
    }

    
    public function products(){
        return view('Users.products');
    }

    public function checkouts(){
        return view('Users.checkouts');
    }

}
