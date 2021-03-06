<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Model\Category;

class CategoryController extends Controller
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
            'name'
        ];

        $categories = Category::select($columns)
            ->orderby('id', 'DESC')->paginate(Category::ROW_LIMIT);

        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $category = new Category($request->all());
        if ($category->save()) {
            flash(__('Thêm danh mục thành công'))->success();
        } else {
            flash(__('Lỗi trong quá trình thêm danh mục'))->error();
        }
        return redirect()->route('categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        if ($category->update($request->all())) {
            flash(__('Sửa danh mục thành công'))->success();
        } else {
            flash(__('Sửa danh mục lỗi'))->error();
        }
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id choose category delete
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {
            flash(__('Xóa thành công'))->success();
        } else {
            flash(__('Xóa thất bại'))->error();
        }
        return redirect()->route('categories.index');
    }
}
