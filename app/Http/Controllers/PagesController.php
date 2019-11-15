<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
    deleteExpiredSubscription();
    return view('pages.index');
  }
  public function about()
  {
    return view('pages.about');
  }
}
