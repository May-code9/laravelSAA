<?php
use App\User;
use App\Admin;

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
