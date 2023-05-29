<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view("backend.products.index",['products'=>$products]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required','min:3'],
            'price'=>['required','min:3'],
            'details'=>['required','min:10'],
        ]);
        Product::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'details'=>$request->details,
        ]);
        return redirect()->route('products.index')->withMessage('product updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view("backend.products.show",['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view("backend.products.edit",['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $requestData=[
            'title'=>$request->title,
            'price'=>$request->price,
            'details'=>$request->details,
        ];

        $product->update($requestData);

        return redirect()->route('products.index')->withMessage('product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route("products.index")->withMessage('product deleted successfully');
    }
}
