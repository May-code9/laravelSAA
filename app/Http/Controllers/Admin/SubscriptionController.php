<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscription;
use App\User;

class SubscriptionController extends Controller
{
  public function index()
  {
    //
  }

  public function create()
  {
    return view('admin.body.subscription.add');
  }

  public function add_subscriber(Request $request, $id)
  {
    $userSubscription = $request->all();
    $userSubscription['user_id'] = $id;
    if($request->session == 'both') {
      $userSubscription['subscription_cost'] = $request->timeline * 1000;
    }
    else {
      $userSubscription['subscription_cost'] = $request->timeline * 500;
    }
    Subscription::create($userSubscription);
    $getUser = User::where('id', $id)->get()->last();

    return redirect('/unpaid')->with('success_status', 'Subscription for ' . $getUser->first_name . ' ' . $getUser->last_name . ' was successful');
  }
}
