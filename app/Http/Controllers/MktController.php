<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MktController extends Controller
{
    public function index(){

        return view('marketingr.mkt');
    }
}
