<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        $title = "Product page";
        return view("pages.index");
    }
}
