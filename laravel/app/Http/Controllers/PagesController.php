<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index() {

        return view('pages.index');

    }

    public function Info() {
        return view('pages.info');
    }

    public function Staff() {
        return view('pages.staff');
    }

    public function Contact() {
        return view('pages.contact');   
    }
}
