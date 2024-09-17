<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
// use App\Models\User;
// use Illuminate\Http\Request;

class UsersDetailsController extends Controller
{
    function create_user(){
        
        return view('admin.user.create');
    }

    function index_purchases(){
        $products = Product::all();
        return view('admin.analy.tables', compact('products'));
        // return view('admin.analy.tables');
    }


    
}
