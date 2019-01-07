<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function view()
    {
        $products = new Product;
        $products = $products::all();

        $value = Product::getValue($products);

        return view('index')->with(['products' => $products,
            'value' => $value
        ]);
    }
}
