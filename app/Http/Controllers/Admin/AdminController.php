<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\User;

class AdminController extends Controller
{
    public function all_admin_users()
    {
      $getAdmins = Admin::join('users', 'users.id', '=', 'admins.user_id')
      ->select('users.id', 'slug', 'admins.created_at', 'first_name', 'last_name', 'phone')
      ->get();

      return view('admin.body.admin.list', compact('getAdmins'));
    }
    public function add_admin_users()
    {
      $getUsers = User::get();
      return view('admin.body.admin.add', compact('getUsers'));
    }
    public function post_admin_user(Request $request)
    {
      $checkAdmin = Admin::where('user_id', $request->user_id)->count();

      if($checkAdmin > 0) {
        return back()->with('failure_status', 'User already exists as Admin');
      }
      else {
        Admin::create($request->all());

        return redirect('/verified')->with('success_status', 'New Admin User Added');
      }
    }
    public function admin_user($id)
    {
      $checkAdmin = Admin::where('user_id', $id)->count();

      if($checkAdmin > 0) {
        $getUser = Admin::join('users', 'users.id', '=', 'admins.user_id')
        ->where('user_id', $id)
        ->select('slug', 'first_name', 'last_name')
        ->get()->last();
      }
      else {
        return redirect('/verified')->with('failure_status', 'User is not Admin');
      }

      return view('admin.body.admin.show', compact('getUser'));
    }
    public function edit_admin($id)
    {
      $getAdmin = Admin::join('users', 'users.id', '=', 'admins.user_id')
      ->where('user_id', $id)
      ->select('users.id', 'slug', 'first_name', 'last_name', 'user_id')
      ->get()->last();
      $getUsers = User::get();

      return view('admin.body.admin.edit', compact('getUsers', 'getAdmin'));
    }
    public function post_edit_admin(Request $request, $id)
    {
      $update = Admin::where('user_id', $id)->get()->last();
      $update->update(['user_id'=>$request->user_id, 'slug'=>$request->slug]);

      return redirect('/verified')->with('success_status', 'Admin Updated');
    }
}
