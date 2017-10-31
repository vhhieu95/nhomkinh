<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Image;
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
            'description'
        ];
            
        $products = Product::select($columns)
            ->orderby('id', 'DESC')->paginate(Product::ROW_LIMIT);

        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'name')->get();
        return view('backend.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product($request->all());
        $result = $product->save();
        if ($result) {
            flash(__('Thêm sản phẩm thành công'))->success();
        } else {
            flash(__('Thêm sản phẩm thất bại!'))->error();
            return redirect()->back()->withInput();
        }
        Image::storeImages($request->images, 'product', $product->id, config('constant.path_upload_products'));

        return redirect()->route('products.index');
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
       $categories = Category::select('id', 'name')->get();
        return view('backend.products.edit', compact('product', 'categories'));
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
        if ($product->update($request->all())) {
            flash(__('Sửa thành công!'))->success();
        } else {
            flash(__('Sửa thất bại!'))->error();
            return redirect()->back()->withInput();
        }
        if (isset($request->images)) {
            Image::storeImages($request->images, 'product', $product->id, config('constant.path_upload_products'));
        }

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->delete()) {
            flash(__('Xóa thành công'))->success();
        } else {
            flash(__('Xóa thất bại'))->error();
        }
        return redirect()->route('products.index');
    }
}
