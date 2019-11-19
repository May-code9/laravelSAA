<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $getUsers = User::paginate(20);

      return view('admin.body.user.list',  compact('getUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.body.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
          'first_name' => 'required', 'string', 'max:255',
          'last_name' => 'required', 'string', 'max:255',
          'phone' => 'required', 'string', 'max:255',
          'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
          'password' => 'required', 'string', 'min:8', 'confirmed',
          'passport' => 'required|mimes:jpeg,png|max:4000',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->passes()) {
            $imageFile = $request->file('passport');
            $imageName = $request->first_name . '_' . $request->last_name . '_' . $request->email;

            $destinationPath = public_path('/passports');
            Image::make($imageFile->getRealPath())->save($destinationPath.'/'.$imageName);

            $newUser = $request->all();
            $newUser['passport'] = $imageName;
            $newUser['password'] = Hash::make($request->password);
            User::create($newUser);

            return redirect('/allUsers')->with('success_status', 'New User ' . $request->first_name . ' ' . $request->last_name . ' has been added' );
        } else {
          return back()->withErrors($validator)->withInput();
        }
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

      return view('admin.body.user.show',  compact('getUser'));
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

      return view('admin.body.user.edit',  compact('getUser'));
    }

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

          return redirect('/allUsers')->with('success_status', $request->first_name . " " . $request->last_name . "'s Details has been Updated");
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
