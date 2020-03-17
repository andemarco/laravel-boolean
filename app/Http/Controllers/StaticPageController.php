<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
  // FUNZIONE HOMEPAGE
    public function homeView()
    {
      return view('home');
    }
}
