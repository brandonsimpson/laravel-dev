<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Test\BTestController;


class PagesController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function test1(){

        return view('pages.test1');
    }
}
