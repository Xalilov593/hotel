<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($lang, $id)
    {
        return view('frontend.user.profile', ['lang' => $lang, 'id' => $id]);
    }

    public function security($lang, $id)
    {
        return view('frontend.user.security', ['lang' => $lang, 'id' => $id]);

    }
    public function invoice($lang, $id)
    {
        return view('frontend.user.invoice', ['lang' => $lang, 'id' => $id]);

    }
    public function social($lang, $id)
    {
        return view('frontend.user.social', ['lang' => $lang, 'id' => $id]);

    }
}
