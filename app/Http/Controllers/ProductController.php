<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Product::with('category')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          $product = Product::create($request->all());

        return response()->json(
            $product->load('category'),
            200
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
            $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $product->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        return response()->json($product, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
         $product->delete();

            return response()->json([
                'message' => 'Product deleted successfully'
            ], 200);
    }
}
