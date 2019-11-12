<?php
use App\User;
use App\Admin;
use App\Subscription;

function checkAdmin()
{
  $checkIfAdmin = Admin::where('user_id', Auth::id())->count();

  return $checkIfAdmin;
}

function checkPassport()
{
  $checkIfPassportIsPresent = User::where('id', Auth::id())->get()->last();

  return $checkIfPassportIsPresent->passport;
}
function allUsers()
{
  $getUsers = User::count();

  return $getUsers;
}
function activeUsers()
{
  $getSubscribedUsers = Subscription::join('users', 'users.id', '=', 'subscriptions.user_id')
  ->select('first_name', 'last_name', 'phone', 'email', 'users.created_at', 'users.id')
  ->count();

  return $getSubscribedUsers;
}
function inactiveUsers()
{
  $getAllUsers = User::pluck('id');
  $collectAllUsers = collect($getAllUsers);

  $getInActiveUsers = Subscription::join('users', 'users.id', '=', 'subscriptions.user_id')
  ->select('first_name', 'last_name', 'phone', 'email', 'users.created_at', 'users.id', 'user_id')
  ->pluck('user_id');
  $collectInActiveUsers = collect($getInActiveUsers);
  $differenceBtwActiveAndInActive = $collectAllUsers->diff($getInActiveUsers)->toArray();

  $inactiveUsers = User::whereIn( 'id', $differenceBtwActiveAndInActive)->count();

  return $inactiveUsers;
}
