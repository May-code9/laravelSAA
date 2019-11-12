<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use Image;
use Auth;

class PhotoController extends Controller
{
  public function show()
  {
    $user = User::findOrFail(Auth::id());

    return view('pages.passport.show', compact('user'));
  }
  public function store(Request $request)
  {
    $rule = [
          'passport' => 'required|mimes:jpeg,png|max:4000',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->passes()) {
            $imageFile = $request->file('passport');
            $imageName = time().'.'.$imageFile->getClientOriginalExtension();

            $destinationPath = public_path('/passports');
            Image::make($imageFile->getRealPath())->save($destinationPath.'/'.$imageName);

            $passport = User::findOrFail(Auth::id());
            $passport->update(['passport' => $imageName]);

            return redirect('/');
        } else {
          return back()->withErrors($validator)->withInput();
        }
  }
}
