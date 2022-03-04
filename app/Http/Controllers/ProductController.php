<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(8);
        return view('private.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('private.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        Product::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')
            ->with(['info' => 'Se ha creado el producto con &eacute;xito',
                'title' => 'Eureka',
                'alert' => 'success',
            ]);
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
    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');
        return view("private.products.edit", compact('product', 'categories '));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with(['info' => 'Se ha actualizado el producto con &eacute;xito',
                'title' => 'Eureka',
                'alert' => 'success',
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with(['info' => 'Se ha eliminado el producto con &eacute;xito',
                'title' => 'Eureka',
                'alert' => 'success',
            ]);
    }
}