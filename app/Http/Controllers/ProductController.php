<?php

namespace App\Http\Controllers;

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
        $products = Product::latest()->paginate(4);
        return view('products.index', compact('products'));
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
        $request->validate([
            'product_name' => 'required|max:255',
            'price' => 'required|max:255',
            'product_info' => 'required|max:255',
        ]);
        $product = Product::create($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Product created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'price' => 'required|max:255',
            'product_info' => 'required|max:255',
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Product deleted');
    }
    public function softDelete($id)
    {
        $product = Product::find($id)->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted');
    }
    public function trash()
    {
        $products = Product::onlyTrashed()->latest()->paginate(4);
        return view('products.trash', compact('products'));
    }
    public function hardDelete ($id)
    {
        $product = Product::onlyTrashed()->where('id', $id)->forceDelete();
        return redirect()->route('trash')->with('success', 'Product deleted');
    }
    public function restore($id)
    {
        $product = Product::onlyTrashed()->where('id', $id)->first()->restore();
        return redirect()->route('trash')->with('success', 'Product restored');
    }
}
