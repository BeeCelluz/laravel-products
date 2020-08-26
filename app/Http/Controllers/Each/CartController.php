<?php

namespace App\Http\Controllers\Each;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application home-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('product.cart');
    }
    /**
     * Show the application product-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
}
