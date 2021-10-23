<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Subscription;
use App\PaymentImage;
use App\User;
use Image;
use Auth;

class PhotoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function show()
  {
    $info = 'User details successfully uploaded, Kindly Upload Passport and fill other information';
    $user = User::findOrFail(Auth::id());

    return view('pages.passport.show', compact('user', 'info'));
  }
  public function store(Request $request)
  {
    $rule = [
      'passport' => 'required|mimes:jpeg,png|max:4000',
      'session' => 'required', 'string',
      'capital' => 'required', 'integer',
    ];

    $validator = Validator::make($request->all(), $rule);
    if($validator->passes()) {
      $imageFile = $request->file('passport');
      $imageName = Auth::user()->first_name . '_' . Auth::user()->last_name . '_' . Auth::user()->email . '.'.$imageFile->getClientOriginalExtension();
      
      $destinationPath = public_path('/passports');
      Image::make($imageFile->getRealPath())->save($destinationPath.'/'.$imageName);

      $passport = User::findOrFail(Auth::id());
      $passport->update(['passport' => $imageName]);

      $saveToSubscription = new Subscription();
      $saveToSubscription->user_id = Auth::id();
      $saveToSubscription->session = $request->session;
      $saveToSubscription->capital = $request->capital;
      $saveToSubscription->save();

      return redirect('/receipt/show')->with('success_status', 'Passport upload successful, Kindly Upload Payment Receipt');
    } else {
      return back()->withErrors($validator)->withInput();
    }
  }
  public function receipt_show()
  {
    return view('pages.receipt.show');
  }
  public function receipt_store(Request $request)
  {
    $rule = [
      'image' => 'required|mimes:jpeg,png|max:4000',
    ];

    $validator = Validator::make($request->all(), $rule);
    if($validator->passes()) {
      $imageFile = $request->file('image');
      $imageName = time().'.'.$imageFile->getClientOriginalExtension();

      $destinationPath = public_path('/paymentReceipt');
      Image::make($imageFile->getRealPath())->save($destinationPath.'/'.$imageName);

      $paymentReceipt = new PaymentImage();
      $paymentReceipt['user_id'] = Auth::id();
      $paymentReceipt['image'] = $imageName;
      $paymentReceipt->save();

      return redirect('/')->with('receipt_status', 'Payment Receipt upload successful');
    } else {
      return back()->withErrors($validator)->withInput();
    }
  }
}
