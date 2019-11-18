<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
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
  public function newsletter(Request $request)
  {
    $checkEmail = Newsletter::where('email', $request->email)->count();
    if($checkEmail > 0) {
      return response()->json(array(
        "result"=> "You are already on our list of subscribers",
      ));
    }
    else {
      Newsletter::create($request->all());

      return response()->json(array(
        "result"=> "You have successfully subscribed for our Newsletter",
      ));
    }
  }
}
