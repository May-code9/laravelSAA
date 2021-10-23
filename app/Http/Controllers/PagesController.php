<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\PaymentImage;
use App\Subscription;
use App\Newsletter;
use App\User;
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
  public function faqs()
  {
    return view('pages.faqs');
  }
  public function user()
  {
    $account = 'addActive';
    $countPassport = User::where('id', Auth::id())->whereNotNull('passport')->count();
    $countPaymentReceipt = PaymentImage::where('id', Auth::id())->count();
    $getPaymentReceipt = PaymentImage::where('id', Auth::id())->get()->last();
    $countSubscription = Subscription::where('user_id', Auth::id())->count();
    $getSubscription = Subscription::where('user_id', Auth::id())->get()->last();
    return view('pages.account.view', compact('countPassport', 'countPaymentReceipt', 'getPaymentReceipt', 'countSubscription', 'getSubscription', 'account'));
  }
  public function edit_user()
  {
    $account = 'addActive';

    return view('pages.account.edit');
  }
  public function edit_user_post(Request $request)
  {
    $rule = [
      'first_name' => ['required', 'string', 'max:255'],
      'last_name' => ['required', 'string', 'max:255'],
      'phone' => ['required', 'string', 'max:255'],
    ];

    $validator = Validator::make($request->all(), $rule);
    if($validator->passes()) {
      $update = User::where('id', Auth::id())->get()->last();
      $update->update(['first_name'=>$request->first_name, 'last_name'=>$request->last_name, 'phone'=>$request->phone]);

      return redirect('/my/account')->with('success_status', "Your account has been updated");
    }
    else {
      return back()->withErrors($validator)->withInput();
    }
  }
}
