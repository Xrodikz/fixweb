<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }


    public function index()
    {
        return view('layout.index');
    }

    public function home(){
        $products = Product::latest()->paginate(5);
     
        return view('home',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // $products = Product::latest()->paginate(5);
        // return view('home',compact('product'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
    {
        return view('user.home',["msg"=>"Hello! I am user"]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.home',["msg"=>"Hello! I am admin"]);
    }
}