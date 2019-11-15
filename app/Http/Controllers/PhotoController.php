<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
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
    $user = User::findOrFail(Auth::id());

    return view('pages.passport.show', compact('user'));
  }
  public function store(Request $request)
  {
    $rule = [
      'passport' => 'required|mimes:jpeg,png|max:4000',
    ];

    $validator = Validator::make($request->all(), $rule);
    if($validator->passes()) {
      $imageFile = $request->file('passport');
      $imageName = time().'.'.$imageFile->getClientOriginalExtension();

      $destinationPath = public_path('/passports');
      Image::make($imageFile->getRealPath())->save($destinationPath.'/'.$imageName);

      $passport = User::findOrFail(Auth::id());
      $passport->update(['passport' => $imageName]);

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
