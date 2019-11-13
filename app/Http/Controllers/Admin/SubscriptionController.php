<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscription;
use App\User;

class SubscriptionController extends Controller
{
  public function view_subscriber($id)
  {
    $getUser = Subscription::join('users', 'users.id', '=', 'subscriptions.user_id')
    ->where('users.id', $id)
    ->select('session', 'users.id', 'first_name', 'last_name', 'capital', 'timeline', 'subscription_month', 'subscription_cost')
    ->get()->last();
    return view('admin.body.subscription.show', compact('getUser'));
  }

  public function all_subscribers()
  {
    $getSubscribedUsers = Subscription::join('users', 'users.id', '=', 'subscriptions.user_id')
    ->select('first_name', 'last_name', 'phone', 'email', 'users.created_at', 'users.id')
    ->paginate(20);

    return view('admin.body.subscription.list',  compact('getSubscribedUsers'));
  }

  public function create($id)
  {
    $getUser = User::where('id', $id)->get()->last();
    return view('admin.body.subscription.add', compact('getUser'));
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
