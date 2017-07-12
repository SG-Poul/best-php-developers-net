<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function quote()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'skype' => 'required',
            'telephone' => 'required',
            'title' => 'required',
        ]);
        $qt = new Quote();
        $qt->name = request()['name'];
        $qt->email = request()['email'];
        $qt->skype = request()['skype'];
        $qt->telephone = request()['telephone'];
        $qt->body = request()['title'];
        $qt->save();
//        echo $qt->name;
//       new Quote(request(['name', 'email', 'skype', 'telephone', 'body']));
//       var_dump(request(['name', 'email', 'skype', 'telephone', 'body']));

       return redirect()->back();
    }
}
