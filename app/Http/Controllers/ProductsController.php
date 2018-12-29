<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = new Product;
        $products = $products::all();
        return view('index')->with('products', $products);
    }

    public function productList()
    {
        $products = new Product;
        $products = $products::all();

        foreach ($products as $product) {
            $category[] = Category::find($product->category_id);
            $user[] = User::find($product->user_id);
        }

        return view('products.list')->with(['products' => $products,
            'category' => $category,
            'user' => $user
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required|min:8',
            'brand' => 'required',
            'category' => 'required'
        ]);

        $product = new Product;

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->brand = $request->input('brand');
        $product->user_id = $request->input('user_id');
        $product->category_id = $request->input('category');

        $product->save();

        return redirect('/dashboard')->with('success', 'Product Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = new Product;
        $product = $product::find($id);

        $categories = new Category;
        $categories = $categories->all();

        return view('products.edit')->with(['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required|min:8',
            'brand' => 'required',
            'category' => 'required'
        ]);

        //var_dump($request->input);

        $product = new Product;
        $product = $product::find($id);

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->brand = $request->input('brand');
        $product->category_id = $request->input('category');

        $product->save();

        return redirect('/dashboard')->with('success', 'Product Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = new Product;
        $product = $product::find($id);

        $product->delete();
        return redirect('/dashboard')->with('success', 'Product Removed');
    }
}
