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
    //QrCode::format('png')->size(400)->generate('Embed me into an e-mail!', 'qrcode/' . Auth::id() . '.png');
    return view('pages.index');
  }
  public function about()
  {
    return view('pages.about');
  }
}
