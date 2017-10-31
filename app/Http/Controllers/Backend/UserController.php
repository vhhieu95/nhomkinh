<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CreateUserRequest;
use App\Http\Requests\Backend\EditUserRequest;
use App\Model\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('id', 'name', 'email')->orderby('id', 'DESC')->paginate(User::VALUE_PER_PAGE);
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\CreateUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $user = User::create($request->all());
        if ($user) {
            flash('Tạo người dùng thành công!')->success();
            return redirect()->route('users.index');
        } else {
            flash('Tạo người dùng thất bai!')->error();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return  view('backend.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, User $user)
    {
        if ($request['password'] == null) {
            unset($request['password']);
        }
        $result = $user->update($request->all());
        if ($result) {
            flash('Sửa thông tin người dùng thành công!')->success();
            return redirect()->route('users.index');
        } else {
            flash('Sửa thông tin người dùng thất bại!')->error();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Auth::user()->id == $user->id) {
            flash('Không thể  xóa người dùng đang đăng nhập!')->warning();
        } else {
            $user->delete();
            
            if ($user) {
                flash('Xóa người dùng thành công!')->success();
            } else {
                flash('Xóa  người dùng thất bại!')->error();
            }
        }

        return redirect()->route('users.index');
    }
}
