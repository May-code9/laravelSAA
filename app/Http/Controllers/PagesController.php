<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;
use Auth;

class PagesController extends Controller
{
  public function index()
  {
    deleteExpiredSubscription();
    $home = 'addActive';
    return view('pages.index', compact('home'));
  }
  public function about()
  {
    deleteExpiredSubscription();
    $about = 'addActive';
    return view('pages.about', compact('about'));
  }
  public function services()
  {
    deleteExpiredSubscription();
    $services = 'addActive';
    return view('pages.services', compact('services'));
  }
  public function contact()
  {
    deleteExpiredSubscription();
    $contact = 'addActive';
    return view('pages.contact', compact('contact'));
  }
}
