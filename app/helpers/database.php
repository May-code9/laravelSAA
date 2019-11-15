<?php
use App\User;
use App\Admin;
use Carbon\Carbon;
use App\Subscription;
use App\PaymentImage;
use App\OldSubscription;
use App\OldPaymentImage;

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
function endMonth($start_month, $timeline)
{
  //calculate end month from start start month
  $convertStartMonthToDateFormat = strtotime($start_month);
  $convertStartMonthToMonthNumber = date('n', $convertStartMonthToDateFormat);
  $monthNum = $convertStartMonthToMonthNumber + (int)$timeline;

  $mytime = Carbon::now();
  $mytime = strtotime($mytime);
  $month = date('F', $mytime);
  $currentMonth = strtotime($month);
  $year = date('Y', $mytime);

  if($currentMonth > $convertStartMonthToDateFormat) {
    $newyear = $year + 1;
    if($monthNum > 12) {
      $monthNum = $monthNum - 12;
      $newyear = $newyear + 1;
    }
  }
  elseif($currentMonth <= $convertStartMonthToDateFormat) {
    $newyear = $year;
    if($monthNum > 12) {
      $monthNum = $monthNum - 12;
      $newyear = $newyear + 1;
    }
  }
  $convertEndMonthYear = strtotime($monthNum . '/' . 1 . '/' .$newyear);
  $endMonth = date('Y-m-d', $convertEndMonthYear);

  return $endMonth;
}
function checkReceipt()
{
  $checkReceipt = PaymentImage::where('user_id', Auth::id())->count();

  return $checkReceipt;
}
function deleteExpiredSubscription()
{
  $nowDate = now();
  $nowDate = strtotime($nowDate);
  $toTimeNowDate = date('Y-m-d', $nowDate);

  $getEndDate = Subscription::where('end_month', '<', $toTimeNowDate)->count();
  if($getEndDate > 0) {
    $getUserDate = Subscription::where('end_month', '<', $toTimeNowDate)->get()->toArray();
    foreach ($getUserDate as $userDate) {
      OldSubscription::insert($userDate);
      $getImages = PaymentImage::where('user_id', $userDate['user_id'])->get()->toArray();
      foreach ($getImages as $getImage) {
        OldPaymentImage::insert($getImage);
      }
      PaymentImage::where('user_id', $userDate['user_id'])->delete();
    }
    Subscription::where('end_month', '<', $toTimeNowDate)->delete();
  }
}
