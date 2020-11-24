<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::take(5)->orderByDesc('id')->get();
        $title = 'Beranda';
        return view('home.index',compact('products','title'));
        
    }
}