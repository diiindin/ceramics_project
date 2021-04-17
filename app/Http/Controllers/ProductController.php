<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //get products
        //$products = Product::paginate(15);
        $products = Product::all();
        //return collection of products as a resource
        //return ProductResource::collection($products);
        return response($products, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product =new Product();
        $product->id=$request->id;
        $product->name=$request->name;
        $product->description=$request->description;

        if($product->save()) {
            return new ProductResource($product);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $product = Product::find($request->id);

        if ($product == null) {
            return response(['message' => 'There is no such product'], 404);
        }
        return response($product, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //get product
        $product = Product::find($request->id);

        if($product->delete()) {
            return new ProductResource($product);
        }
    }

    public function update(Request $request, $id)
    {
        //
        $product =Product::findOrFail($id);
        $product->id=$request->id;
        $product->name=$request->name;
        if($product->save()){
            return new ProductResource($product);
        }
    }
}
