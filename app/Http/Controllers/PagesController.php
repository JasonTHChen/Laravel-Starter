<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function contact() {
        return view('pages.contactus');
    }

    public function about() {
        return view('pages.aboutus');
    }
}
