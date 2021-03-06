<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PaymentImage;
use App\Subscription;
use Carbon\Carbon;
use App\Admin;
use App\User;
use Image;
use Auth;

class SubscriptionController extends Controller
{
  public function view_subscriber($id)
  {
    $getPaymentReceipt = PaymentImage::where('user_id', $id)->get()->last();

    $getUser = Subscription::join('users', 'users.id', '=', 'subscriptions.user_id')
    ->where('users.id', $id)
    ->select('session', 'users.id', 'first_name', 'last_name', 'capital', 'timeline', 'start_month', 'end_month', 'subscription_cost')
    ->get()->last();
    return view('admin.body.subscription.show', compact('getUser', 'getPaymentReceipt'));
  }

  public function all_subscribers()
  {
    $getSubscribedUsers = Subscription::join('users', 'users.id', '=', 'subscriptions.user_id')
    ->whereNotNull('subscription_cost')
    ->select('first_name', 'last_name', 'phone', 'email', 'users.created_at', 'users.id')
    ->paginate(20);

    return view('admin.body.subscription.list',  compact('getSubscribedUsers'));
  }

  public function create($id)
  {
    $countUserReceipt = PaymentImage::where('user_id', $id)->count();
    $getUserReceipt = PaymentImage::where('user_id', $id)->get()->last();
    $getUser = User::where('id', $id)->get()->last();

    return view('admin.body.subscription.add', compact('getUserReceipt', 'countUserReceipt', 'getUser'));
  }

  public function add_subscriber(Request $request, $id)
  {
    $userSubscription = $request->all();
    $userSubscription['user_id'] = $id;
    if($request->session == 'Both') {
      $userSubscription['subscription_cost'] = $request->timeline * 1000;
    }
    else {
      $userSubscription['subscription_cost'] = $request->timeline * 500;
    }

    $endMonth = endMonth($request->start_month, $request->timeline);
    $userSubscription['end_month'] = $endMonth;
    Subscription::create($userSubscription);

    //end save to Subscription
    $getAdminId = Admin::where('user_id', Auth::id())->get()->last();

    if($request->has('image')) {
      //start save to PaymentImage
      $rule = [
        'image' => 'nullable|mimes:jpeg,png|max:4000',
      ];

      $validator = Validator::make($request->all(), $rule);
      if($validator->passes()) {
        $imageFile = $request->file('image');
        $imageName = time().'.'.$imageFile->getClientOriginalExtension();

        $destinationPath = public_path('/paymentReceipt');
        Image::make($imageFile->getRealPath())->save($destinationPath.'/'.$imageName);

        $uploadPaymentReceipt = new PaymentImage();
        $uploadPaymentReceipt->user_id = $id;
        $uploadPaymentReceipt->admin_id = $getAdminId->id;
        $uploadPaymentReceipt->image = $imageName;
        $uploadPaymentReceipt->save();
      }
      else {
        return back()->withErrors($validator)->withInput();
      }
    }
    $getUser = User::where('id', $id)->get()->last();

    return redirect('/unpaid')->with('success_status', 'Subscription for ' . $getUser->first_name . ' ' . $getUser->last_name . ' was successful');
  }
  public function edit_subscriber($id)
  {
    $countUserReceipt = PaymentImage::where('user_id', $id)->count();
    $getPaymentReceipt = PaymentImage::where('user_id', $id)->get()->last();

    $getUser = Subscription::join('users', 'users.id', '=', 'subscriptions.user_id')
    ->where('users.id', $id)
    ->select('session', 'users.id', 'first_name', 'last_name', 'capital', 'timeline', 'start_month', 'subscription_cost')
    ->get()->last();
    return view('admin.body.subscription.edit', compact('getUser', 'getPaymentReceipt', 'countUserReceipt'));
  }
  public function update_subscriber(Request $request, $id)
  {
    $rule = [
      'session' => 'required', 'string',
      'capital' => 'required', 'integer',
      'timeline' => 'required', 'integer',
      'start_month' => 'required', 'string',
      'image' => 'nullable|mimes:jpeg,png|max:4000',
    ];

    $validator = Validator::make($request->all(), $rule);
    if($validator->passes()) {
      if($request->session == 'Both') {
        $userSubscription = $request->timeline * 1000;
      }
      else {
        $userSubscription = $request->timeline * 500;
      }

      $endMonth = endMonth($request->start_month, $request->timeline);

      $updateSubscription = Subscription::where('user_id', $id)->get()->last();
      $updateSubscription->update(['session'=>$request->session, 'capital'=>$request->capital,
      'timeline'=>$request->timeline, 'start_month'=>$request->start_month,
      'subscription_cost'=>$userSubscription, 'end_month'=>$endMonth]);
      //for success_status
      $user = User::findOrFail($id);
      //end
      if($request->has('image')) {
        //dd($request->all());
        $imageFile = $request->file('image');
        $imageName = time().'.'.$imageFile->getClientOriginalExtension();

        $destinationPath = public_path('/paymentReceipt');
        Image::make($imageFile->getRealPath())->save($destinationPath.'/'.$imageName);

        $countUserReceipt = PaymentImage::where('user_id', $id)->count();
        if($countUserReceipt > 0) {
          $updatePaymentImage = PaymentImage::where('user_id', $id)->get()->last();
          $updatePaymentImage->update(['image'=>$imageName]);
        }
        else {
          $uploadPaymentReceipt = new PaymentImage();
          $uploadPaymentReceipt->user_id = $id;
          $uploadPaymentReceipt->admin_id = Auth::id();
          $uploadPaymentReceipt->image = $imageName;
          $uploadPaymentReceipt->save();
        }
      }
      return redirect('/all/subscriber')->with('success_status' ,$user->first_name . ' ' . $user->last_name . ' Subscription details updated');
    }
    else {
      return back()->withErrors($validator)->withInput();
    }
  }
}
