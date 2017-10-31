<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::select('id', 'name', 'email', 'phone', 'subject', 'content')->paginate(10);
        return view('backend.contacts.index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('backend.contacts.show', compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id)->delete();
        if ($contact) {
            flash(__('Xóa Liên Hệ thành công!'))->success();
            return redirect()->route('contacts.index');
        } else {
            flash(__('Xóa Liên Hệ thất bại!'))->error();
            return redirect()->route('contacts.index');
        }
    }
}
