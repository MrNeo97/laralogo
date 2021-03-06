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

        $value = Product::getValue($products);

        return view('index')->with(['products' => $products,
            'value' => $value
        ]);
    }

    public function productList()
    {
        $products = new Product;
        $products = $products::all();

        $value = Product::getValue($products);

        return view('products.list')->with(['products' => $products,
            'value' => $value
            ]);
    }

    public function products()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            $cat[$category->id] = $category->name;
        }

        return view('products.create')->with('categories', $cat);
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
    public function show(Request $request)
    {

        if($request->search) {

            switch ($request->input('parameter')) {

                case 'name':
                    $products = Product::Search($request->parameter, $request->search);
                    if($value = Product::getValue($products)) {
                        return view('products.list')->with(['products' => $products,
                            'value' => $value
                        ]);
                    } else {
                        return redirect('/list')->with('success', 'Nothing found for ' . $request->search);
                    }
                    break;

                case 'brand':
                    $products = Product::Search($request->parameter, $request->search);
                    if($value = Product::getValue($products)) {
                        return view('products.list')->with(['products' => $products,
                            'value' => $value
                        ]);
                    } else {
                        return redirect('/list')->with('success', 'Nothing found for ' . $request->search);
                    }
                    break;

                case 'category_id':
                    $category = Category::getName('name', $request->search);
                    //var_dump($category[0]->id);
                    if (count($category) >= 1) {
                        $products = Product::Search($request->parameter, $category[0]->id);
                        $value = Product::getValue($products);
                        return view('products.list')->with(['products' => $products,
                            'value' => $value
                        ]);
                    } else {
                        return redirect('/list')->with('success', 'Nothing found for ' . $request->search);
                    }
                    break;

                default :
                    return redirect('/list')->with('success', 'Please, select one option');
            }
        } else {
            return redirect('/list')->with('success', 'Nothing found');
        }

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
