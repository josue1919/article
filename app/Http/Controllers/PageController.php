<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class PageController extends Controller
{
    //
    public function index()
    {
  
        return view('site.index');

    }

}