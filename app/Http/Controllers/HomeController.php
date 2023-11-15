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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index(Request $request)
    {
        // Fetch products data using the same logic as in the ProductController
        $query = $request->input('search');
        if ($query) {
            $products = Product::search($query)->get();
        } else {
            $products = Product::all();
        }

        // Pass the $products data to the home view
        return view('home', compact('products'));
    }



}
