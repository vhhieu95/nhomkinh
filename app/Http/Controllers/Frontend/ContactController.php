<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CreateContactRequest;
use App\Model\Contact;

class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateContactRequest $request)
    {
        $result = Contact::create($request->all());
        if ($result) {
            flash('Gửi thành công!')->success();
        } else {
            flash('Gửi thất bại')->error();
        }
        return redirect()->route('lien-he.create');
    }

}
