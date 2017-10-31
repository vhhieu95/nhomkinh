<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Introduces\IntroduceCreateRequest;
use App\Http\Requests\Introduces\IntroduceUpdateRequest;
use App\Model\Introduction;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $introduces = Introduction::select('id', 'title', 'content')->paginate(10);
        return view('backend.introduces.index', compact('introduces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.introduces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IntroduceCreateRequest $request)
    {
        $introduces = new Introduction($request->all());
        $result = $introduces->save();
        if ($result) {
            flash(__('Tạo trang giới thiệu thành công!'))->success();
        } else {
            flash(__('Tạo trang giới thiệu thất bại!'))->error();
            return redirect()->back()->withInput();
        }
        return redirect()->route('introduces.index');
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
        $introduction = Introduction::findOrFail($id);
        return view('backend.introduces.edit', compact('introduction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IntroduceUpdateRequest $request, $id)
    {
        $introduction = Introduction::findOrFail($id);
        if ($introduction->update($request->all())) {
            flash(__('Sửa giới thiệu thành công!'))->success();
        } else {
            flash(__('Sửa giới thiệu thất bại!'))->error();
            return redirect()->back()->withInput();
        }
        return redirect()->route('introduces.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $introduce = Introduction::findOrFail($id)->delete();
        if ($introduce) {
            flash(__('Xóa Giới Thiệu thành công!'))->success();
            return redirect()->route('introduces.index');
        } else {
            flash(__('Xóa Giới Thiệu thất bại!'))->error();
            return redirect()->route('introduces.index');
        }
    }
}
