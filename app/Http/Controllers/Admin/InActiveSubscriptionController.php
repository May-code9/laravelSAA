<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscription;
use App\User;

class InActiveSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $getAllUsers = User::pluck('id');
      $collectAllUsers = collect($getAllUsers);

      $getInActiveUsers = Subscription::join('users', 'users.id', '=', 'subscriptions.user_id')
      ->select('first_name', 'last_name', 'phone', 'email', 'users.created_at', 'users.id', 'user_id')
      ->pluck('user_id');
      $collectInActiveUsers = collect($getInActiveUsers);
      $differenceBtwActiveAndInActive = $collectAllUsers->diff($getInActiveUsers)->toArray();

      $inactiveUsers = User::whereIn( 'id', $differenceBtwActiveAndInActive)->paginate(20);

      return view('admin.body.inactive-subscription.list',  compact('inactiveUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
