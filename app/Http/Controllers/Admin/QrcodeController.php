<?php

namespace App\Http\Controllers\Admin;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscription;
use App\User;
use App\Qr;
use Auth;

class QrcodeController extends Controller
{
    public function generate_view()
    {
      deleteExpiredSubscription();
      $getSubscribedUsers = Subscription::join('users', 'users.id', '=', 'subscriptions.user_id')
      ->whereNotNull('subscription_cost')
      ->select('first_name', 'last_name', 'phone', 'email', 'users.created_at', 'users.id')
      ->paginate(20);

      return view('admin.body.qrcode.list', compact('getSubscribedUsers'));
    }
    public function post_generate_view(Request $request, $id)
    {
      $saveQrdetails = $request->all();
      $saveQrdetails['admin_id'] = Auth::id();
      Qr::create($saveQrdetails);

      QrCode::format('png')->size(600)->generate('localhost::8000/qrcode/userview/' . $request->user_id, 'qrcode/' . $request->qrcode . '.png');
      return response()->json(array(
        "result"=> "Qr code Generated!",
        "user" => $request->qrcode,
      ));
    }
    public function view_generated($id)
    {
      $checkQr = Qr::where('user_id', $id)->count();
      if($checkQr == 0) {
        return redirect('/user/qrcode')->with('failure_status', 'User with ID Number ' . $id . ' has an expired QR Code');
      }
      else{
        $getQr = Qr::where('user_id', $id)->get()->last();
        $getUser = User::where('id', $id)->get()->last();
      }

      return view('admin.body.qrcode.show', compact('getQr', 'getUser'));
    }
}
