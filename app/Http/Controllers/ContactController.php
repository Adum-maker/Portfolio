<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function show()
  {
    return view('contacts.show');
  }

  public function submit(ContactRequest $request)
  {
    dd($request);
    Mail::to('adummaker02@gmail.com')->send(new Contactmail($request->name, $request->email, $request->content));

    return to_route('welcome');
  }
}
