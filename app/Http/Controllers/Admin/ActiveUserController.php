<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscription;
use App\User;

class ActiveUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $getSubscribedUsers = Subscription::join('users', 'users.id', '=', 'subscriptions.user_id')
      ->select('first_name', 'last_name', 'phone', 'email', 'users.created_at', 'users.id')
      ->paginate(20);
      //dd($getSubscribedUsers);

      return view('admin.body.active-user.list',  compact('getSubscribedUsers'));
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
      $getUser = User::findOrFail($id);

      return view('admin.body.active-user.show',  compact('getUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $getUser = User::findOrFail($id);

      return view('admin.body.active-user.edit',  compact('getUser'));
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
      $getUser = User::findOrFail($id);
      $rule = [
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'phone' => ['required', 'string', 'max:255'],
      ];

      $validator = Validator::make($request->all(), $rule);
      if($validator->passes()) {
        $getUser->update(['first_name'=>$request->first_name, 'last_name'=>$request->last_name,
        'phone'=>$request->phone]);

        return redirect('/activeUsers')->with('success_status', 'User Details Updated');
      }
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
