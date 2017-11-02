<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Product;
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
        $columns = [
            'id',
            'name',
            'description',
            'slug'
        ];
            
        $products = Product::select($columns)
            ->orderby('id', 'DESC')->paginate(9);

        return view('frontend.products.index', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $productDiff = Product::where('category_id', $product->category_id)->first();

        return view('frontend.products.show', compact('product', 'productDiff'));
    }

    // public function showProduct()
    // {
    //     $columns = [
    //         'id',
    //         'name',
    //         'slug'
    //     ];
    //     $Newproducts = Product::select($columns)
    //         ->orderby('id', 'DESC')->limit(4);
    //         dd($Newproducts);
    //     return view('frontend.layouts.partials.footer', compact('Newproducts'));
    // }
}
